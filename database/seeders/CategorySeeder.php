<?php

namespace Database\Seeders;

use App\Category;
use App\Row;
use App\Translation;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$category = factory(Category::class)->create();
		$category->row()->save(new Row);
		$category->row->translations()->save(Translation::create([
			'language_id' => 1,
			'key' => 'name',
			'value' => 'Tutorials',
		]));

		$category->row->translations()->save(Translation::create([
			'language_id' => 2,
			'key' => 'name',
			'value' => 'Tutoriales',
		]));

		$category = factory(Category::class)->create();
		$category->row()->save(new Row);
		$category->row->translations()->save(Translation::create([
			'language_id' => 1,
			'key' => 'name',
			'value' => 'Plugins',
		]));

		$category->row->translations()->save(Translation::create([
			'language_id' => 2,
			'key' => 'name',
			'value' => 'Componentes',
		]));

		$category = factory(Category::class)->create();
		$category->row()->save(new Row);
		$category->row->translations()->save(Translation::create([
			'language_id' => 1,
			'key' => 'name',
			'value' => 'Tips',
		]));

		$category->row->translations()->save(Translation::create([
			'language_id' => 2,
			'key' => 'name',
			'value' => 'Consejos',
		]));

		$category = factory(Category::class)->create();
		$category->row()->save(new Row);
		$category->row->translations()->save(Translation::create([
			'language_id' => 1,
			'key' => 'name',
			'value' => 'Projects',
		]));

		$category->row->translations()->save(Translation::create([
			'language_id' => 2,
			'key' => 'name',
			'value' => 'Proyectos',
		]));
	}
}
