<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_admin = Role::where('name', 'admin')->first();
    $role_moderator = Role::where('name', 'moderator')->first();
    $role_publisher = Role::where('name', 'publisher');

    $admin = new User();
    $admin->name = 'Admin';
    $admin->email = 'admin@test.com';
    $admin->password = bcrypt('secret');
    $admin->save();
    $admin->roles()->attach($role_admin);

    
    $moderator = new User();
    $moderator->name = 'moderator';
    $moderator->email = 'moderator@test.com';
    $moderator->password = bcrypt('secret');
    $moderator->save();
    $moderator->roles()->attach($role_moderator);
    }
}
