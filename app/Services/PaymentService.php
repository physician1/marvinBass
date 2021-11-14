<?php

namespace App\Services;

use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Support\Facades\Http;

class PaymentService
{

    private const TEST_PAY_STACK_SECRET = "sk_test_a2004703010bcd37fe75181c097fcc31ead4018b";
    private const PROD_PAY_STACK_SECRET = "sk_live_407b84b90e43a23ffe99db7d01d595101dda9abc";

    public function checkout($data)
    {
        $plan = Plan::find($data['plan_id']);

        $user = User::find($data['user_id']);

        $transaction = Transaction::create([
            'reference' => $this->generateReferenceNumber($data['user_id']),
            'description' => json_encode($plan),
            'amount' => $plan->amount,
            'status' => \App\Constants\Transaction::PENDING,
            'user_id' => $user->id
        ]);

        $fields = [
            'email' => $user->email,
            'amount' => $transaction->amount * 100,
            'currency' => 'GHS',
            'reference' => $transaction->reference,
            'callback_url' => route('callback'),
            'channels' => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
        ];

        return json_decode(Http::withToken(
            env('APP_ENV') == 'local' ? self::TEST_PAY_STACK_SECRET : self::PROD_PAY_STACK_SECRET
        )->post('https://api.paystack.co/transaction/initialize', $fields));
    }

    public function verifyTransaction($data): bool
    {
        $transaction = Transaction::where('reference', $data['trxref'])->first();

        if (!$transaction)
        {
            return false;
        }

        $response = Http::withToken(
            env('APP_ENV') == 'local' ? self::TEST_PAY_STACK_SECRET : self::PROD_PAY_STACK_SECRET
        )->get('https://api.paystack.co/transaction/verify/'.$data['trxref']);


        $response = json_decode($response);

        if (strtolower($response->data->status) == 'success')
        {
            $transaction->update(['status' => \App\Constants\Transaction::SUCCESS]);

            $plan = json_decode($transaction->description);

            UserPlan::create([
                'user_id' => $transaction->user_id,
                'expires_at' => now()->addDays($plan->number_of_days),
                'plan' => $transaction->description
            ]);

        }else {

            $transaction->update(['status' => \App\Constants\Transaction::FAILED]);

        }

        return true;
    }

    private function generateReferenceNumber($user_id): string
    {
        $transaction = Transaction::latest()->first();

        if (!$transaction)
        {
            return date('Y')."-".$user_id."-1";
        }

        $count = Transaction::count();

        return date('Y')."-".$user_id."-".($count + 1);
    }
}
