<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Blog::factory()
            ->count(10) // Number of blogs to generate
            ->has(BlogTranslation::factory()->count(2), 'translations') // Each blog has 2 translations
            ->create();
    }
}
