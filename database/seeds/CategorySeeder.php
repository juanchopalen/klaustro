<?php

use App\Category;
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
        factory(Category::class)->create([
            'name' => 'Tutorials',
        ]);

        factory(Category::class)->create([
            'name' => 'Plugins',
        ]);

        factory(Category::class)->create([
            'name' => 'Tips',
        ]);

        factory(Category::class)->create([
            'name' => 'Projects',
        ]);
    }
}
