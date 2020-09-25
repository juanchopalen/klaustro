<?php

namespace Database\Seeders;

use App\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Language::class)->create([
			'code' => 'en',
			'name' => 'English',
		]);
		factory(Language::class)->create([
			'code' => 'es',
			'name' => 'Español',
		]);
	}
}
