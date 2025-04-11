<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreditCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('credit_card')->insert([
            'name' => 'Testing CreditCard',
            'issuer' => 'Bank of Testing',
            'annual_fee' => 12.5,
            'interest_rate' => 5.3,
            'clickout_url' => 'https://google.com',
            'features' => '[]'
        ]);

        DB::table('credit_card')->insert([
            'name' => 'Sandbox CreditCard',
            'issuer' => 'Bank of Sandbox',
            'annual_fee' => 10.5,
            'interest_rate' => 7.0,
            'clickout_url' => 'https://google.com',
            'features' => '[]'
        ]);

        DB::table('credit_card')->insert([
            'name' => 'Imagine CreditCard',
            'issuer' => 'Bank of Imagine',
            'annual_fee' => 14.5,
            'interest_rate' => 2.0,
            'clickout_url' => 'https://google.com',
            'features' => '[]'
        ]);
    }
}
