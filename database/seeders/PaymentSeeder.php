<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = config('dataseeder.payments');
        //dd($products);
        foreach ($payments as $payment) {
            $new_payment = new Payment();
            $new_payment->name = $payment['name'];
            $new_payment->additional_cost = $payment['additional_cost'];
            $new_payment->first = $payment['first'];
            $new_payment->last = $payment['last'];
            $new_payment->credit_card_number = $payment['credit_card_number'];
            $new_payment->cvc = $payment['cvc'];

            $new_payment->save();
        }
    }
}
