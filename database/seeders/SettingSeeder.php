<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        // general section

        Setting::create([
            'section' => 'general', 'display_name' => 'website name', 'key' => 'website_name', 'type' => 'text', 'order' => 1, 'static_value' => null,
            'ar' => ['value' => 'QUICKFIRMX'],
            'en' => ['value' => 'QUICKFIRMX']
        ]);

        Setting::create([
            'section' => 'general', 'display_name' => 'website address', 'key' => 'website_address', 'type' => 'text', 'order' => 2, 'static_value' => null,
            'ar' => ['value' => 'test'],
            'en' => ['value' => 'test']
        ]);

        Setting::query()->insert([
            ['section' => 'general', 'display_name' => 'website email', 'key' => 'website_email', 'type' => 'email', 'order' => 3, 'is_static' => 1, 'static_value' => 'test@test.com'],
            ['section' => 'general', 'display_name' => 'website phone', 'key' => 'website_phone', 'type' => 'number', 'order' => 4, 'is_static' => 1, 'static_value' => '1234567']
        ]);


        // media setting
        Setting::query()->insert([
            ['section' => 'media', 'display_name' => 'header logo', 'key' => 'header_logo', 'type' => 'file', 'order' => 1, 'is_static' => 1, 'static_value' => 'settings/default.png'],
            ['section' => 'media', 'display_name' => 'footer logo', 'key' => 'footer_logo', 'type' => 'file', 'order' => 2, 'is_static' => 1, 'static_value' => 'settings/default.png'],
            ['section' => 'media', 'display_name' => 'coffee banner', 'key' => 'coffee_banner', 'type' => 'file', 'order' => 3, 'is_static' => 1, 'static_value' => 'settings/default.png'],
            ['section' => 'media', 'display_name' => 'academy banner', 'key' => 'academy_banner', 'type' => 'file', 'order' => 4, 'is_static' => 1, 'static_value' => 'settings/default.png'],
            ['section' => 'media', 'display_name' => 'wholesale banner', 'key' => 'wholesale_banner', 'type' => 'file', 'order' => 5, 'is_static' => 1, 'static_value' => 'settings/default.png']
        ]);

        // social
        Setting::query()->insert([
            ['section' => 'social', 'display_name' => 'facebook', 'key' => 'facebook', 'type' => 'url', 'order' => 1, 'is_static' => 1, 'static_value' => 'https://www.facebook.com'],
            ['section' => 'social', 'display_name' => 'instagram', 'key' => 'instagram', 'type' => 'url', 'order' => 2, 'is_static' => 1, 'static_value' => 'https://www.instagram.com'],
            ['section' => 'social', 'display_name' => 'youtube', 'key' => 'youtube', 'type' => 'url', 'order' => 3, 'is_static' => 1, 'static_value' => 'https://www.youtube.com'],
            ['section' => 'social', 'display_name' => 'twitter', 'key' => 'twitter', 'type' => 'url', 'order' => 3, 'is_static' => 1, 'static_value' => 'https://www.twitter.com']
        ]);

        // seo

        // Setting::create([
        //     'section' => 'seo', 'display_name' => 'meta title', 'key' => 'meta_title', 'type' => 'text', 'order' => 1, 'static_value' => null,
        //     'ar' => ['value' => 'meta title ar'],
        //     'en' => ['value' => 'meta title']
        // ]);
        // Setting::create([
        //     'section' => 'seo', 'display_name' => 'meta keywords', 'key' => 'meta_keywords', 'type' => 'text', 'order' => 2, 'static_value' => null,
        //     'ar' => ['value' => 'meta keywords ar'],
        //     'en' => ['value' => 'meta keywords']
        // ]);
        // Setting::create([
        //     'section' => 'seo', 'display_name' => 'meta description', 'key' => 'meta_description', 'type' => 'textarea', 'order' => 3, 'static_value' => null,
        //     'ar' => ['value' => 'meta description ar'],
        //     'en' => ['value' => 'meta description']
        // ]);
    }
}
