<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create(),
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'bg-red-100'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'bg-green-100'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'bg-blue-100'
        ]);

        Category::create([
            'name' => 'Data Structure',
            'slug' => 'data-structure',
            'color' => 'bg-yellow-100'
        ]);
    }
}