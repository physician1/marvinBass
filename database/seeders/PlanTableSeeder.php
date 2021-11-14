<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $plans = [
            [
                'title' => '1 month Plan',
                'number_of_days' => 30,
                'amount' => 200
            ],
            [
                'title' => '3 months Plan',
                'number_of_days' => 90,
                'amount' => 300
            ],
            [
                'title' => '6 months Plan',
                'number_of_days' => 180,
                'amount' => 500
            ],
            [
                'title' => '1 year Plan',
                'number_of_days' => 365,
                'amount' => 650
            ]
        ];

        foreach ($plans as $plan)
        {
            Plan::create($plan);
        }

        Schema::enableForeignKeyConstraints();
    }
}
