<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@admin.com',
               'role'=>1,
               'password'=> bcrypt('password'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@manager.com',
               'role'=> 2,
               'password'=> bcrypt('password'),
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
               'role'=>0,
               'password'=> bcrypt('password'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
