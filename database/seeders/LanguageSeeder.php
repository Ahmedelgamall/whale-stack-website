<?php

namespace Database\Seeders;

use App\Models\Language;
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
        // Language::create([
        //     'name' => 'Arabic',
        //     'locale' => 'ar',
        //     'abbr' => 'kw',

        // ]);
        Language::create([
            'name' => 'English',
            'locale' => 'en',
            'abbr' => 'us',
        ]);

    }
}
