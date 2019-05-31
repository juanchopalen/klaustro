<?php

use App\Investment;
use Illuminate\Database\Seeder;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Investment::class)->create([
            'amount' => '1000',
            'limit' => '2000',
            'percent' => '0.0908',
            'retirement' => '110',
        ]);
    }
}
