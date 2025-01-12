<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::query()->get()->pluck('id')->toArray();
        $role = Role::query()->create([
            'name' => 'Admin',
        ]);
        Role::query()->insert([
            ['name' => 'Owner'],
            ['name' => 'User']
        ]);
        $role->attachPermissions($permissions);
    }
}
