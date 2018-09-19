<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();

        $user = new Role();
        $user->name = "user";
        $user->display_name = "User";
        $user->save();

        $superAdmin = new Role();
        $superAdmin->name = "superAdmin";
        $superAdmin->display_name = "SuperAdmin";
        $superAdmin->save();
    }
}
