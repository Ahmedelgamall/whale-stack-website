<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Category::factory()
            ->count(10) // Number of categories
            ->has(CategoryTranslation::factory()->count(2), 'translations') // Each category has 2 translations (for different locales)
            ->create();
    }
}
