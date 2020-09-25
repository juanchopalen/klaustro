<?php

namespace Database\Seeders;

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
			'created_at' => '2019-05-31'
		]);
		factory(Investment::class)->create([
			'amount' => '1100',
			'limit' => '2200',
			'percent' => '0.08667',
			'retirement' => '110',
			'created_at' => '2019-00-07'
		]);
	}
}
