<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(User::class)->create([
			'name' => 'Juan Palencia',
			'email' => 'juanchopalen@gmail.com',
			'admin' => 1,
		]);
	}
}
