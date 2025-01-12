<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crud = ['create', 'read', 'update', 'delete'];


        $models = [
            'countries', 'sliders', 'languages',
            'permissions', 'roles', 'admins',
            'services', 'currencies', 'categories',
            'team-members', 'users', 'roasts', 'grinds',
            'products', 'about-us', 'pages', 'coupons',
            'settings','courses-categories','testimonials'
        ];


        foreach ($models as $model) {
            foreach ($crud as $item) {
                $permissions[] = [
                    'name' => Str::replace(' ', '_', Str::lower($item . ' ' . $model)),
                    'display_name' => Str::lower($item . ' ' . $model),
                    'description' => Str::replace('_', ' ', ucwords($item . ' ' . $model))
                ];
            }
        }

        Permission::query()->insert($permissions);
    }
}
