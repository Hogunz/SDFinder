<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create users
        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        $vendorUser = User::create([
            'name' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('vendor'),
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
        ]);

        //Create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'vendor']);
        Role::create(['name' => 'user']);

        //Assigning roles to user
        $adminUser->assignRole('admin');
        $vendorUser->assignRole('vendor');
        $user->assignRole('user');
    }
}
