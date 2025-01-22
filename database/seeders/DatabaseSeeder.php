<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(LanguageSeeder::class);
        // $this->call(CountriesSeeder::class);
        // $this->call(PermissionSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(AdminSeeder::class);
        // $this->call(SettingSeeder::class);
        // $this->call([
        //     CategorySeeder::class,
        // ]);
        $this->call([
            BlogSeeder::class,
        ]);
    }
}
