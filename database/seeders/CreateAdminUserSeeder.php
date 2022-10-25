<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'name' => 'Ali',
            'email' => 'admin@gmail.com',
            'NationalID' => '5130094530',
            'Mobile' => '09338498255',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'احسان',
            'email' => 'mamad@gmail.com',
            'NationalID' => '5130124359',
            'Mobile' => '09056908160',
            'status' => '0',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'test']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
