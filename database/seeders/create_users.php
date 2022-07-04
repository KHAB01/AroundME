<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class create_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Admin',
            'lastname'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'bio'=>"Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
            'password'=> Hash::make('12345678'),
            'user_type'=> 'Administrator'
        ]);

        DB::table('users')->insert([
            'name'=> 'coffe',
            'lastname'=> 'Admin',
            'email'=> 'admincoffee@gmail.com',
            'bio'=>"Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
            'password'=> Hash::make('12345678'),
            'user_type'=> 'Administrator'
        ]);

        DB::table('users')->insert([
            'name'=> 'Customer',
            'lastname'=> 'Hanane',
            'bio'=>"Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
            'email'=> 'customer@gmail.com',
            'password'=> Hash::make('12345678'),
            'user_type'=> 0
        ]);
        DB::table('users')->insert([
            'name'=> 'SuperAdmin',
            'lastname'=> 'Hanane',
            'bio'=>"Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
            'email'=> 'superadmin@gmail.com',
            'password'=> Hash::make('12345678'),
            'user_type'=> 'SuperAdministrator'
        ]);
    }
}
