<?php

namespace Database\Factories;

use App\Models\CategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryTranslation>
 */
class CategoryTranslationFactory extends Factory
{
    protected $model = CategoryTranslation::class;

    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::factory(), // Associate the translation with a category
            'name' => $this->faker->word(), // Fake category name
            'locale' => 'en', // Random locale
        ];
    }
}
