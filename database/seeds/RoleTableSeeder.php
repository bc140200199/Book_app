<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Admin can create moderator';
        $role_admin->save();

        $role_moderator = new Role();
    	$role_moderator->name = 'Moderator';
    	$role_moderator->description= 'm';
    	$role_moderator->save();


        $role_publisher = new Role();
        $role_publisher->name = 'publisher';
        $role_publisher->description = 'publisher can upload their books on this website';
        $role_publisher->save();

    }
}
