<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $service;

    public function __construct(PaymentService $service)
    {
        $this->service = $service;
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id();

        $result = $this->service->checkout($data);

        return redirect($result->data->authorization_url);
    }

    public function callback(Request $request)
    {
        $response = $this->service->verifyTransaction($request->all());

        if (!$response)
        {
            return redirect(url('/'))->with('error', 'Something unexpected happened, try again later');
        }

        return redirect(route('series.index'))->with('success', 'Payment was successful');
    }


}
