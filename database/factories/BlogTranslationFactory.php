<?php

namespace Database\Factories;

use App\Models\BlogTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogTranslation>
 */
class BlogTranslationFactory extends Factory
{
    protected $model = BlogTranslation::class;

    public function definition()
    {
        return [
            'blog_id' => \App\Models\Blog::factory(), // Associate with a blog
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'meta_title' => $this->faker->sentence(),
            'meta_keyword' => implode(', ', $this->faker->words(5)),
            'meta_description' => $this->faker->paragraph(),
            'locale' => 'en',
        ];
    }
}
