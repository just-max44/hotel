<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ouest',
            'slug' => 'ouest',
        ]);

        Category::create([
            'name' => 'Nord',
            'slug' => 'nord',
        ]);

        Category::create([
            'name' => 'Est',
            'slug' => 'est',
        ]);

        Category::create([
            'name' => 'Sud-ouest',
            'slug' => 'sud-ouest',
        ]);

        Category::create([
            'name' => 'Sud-est',
            'slug' => 'sud-est',
        ]);
    }
}
