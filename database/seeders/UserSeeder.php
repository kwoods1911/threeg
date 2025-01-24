<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Adebo Woods',
            'email' => 'akapainting@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'admin'
        ]);


        DB::table('users')->insert([
            'name' => 'Bernard Green',
            'email' => 'bernardgreen@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Khari Woods',
            'email' => 'khariwoods3@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'customer'
        ]);


        DB::table('users')->insert([
            'name' => 'Janae Knowles',
            'email' => 'janaecandace@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'customer'
        ]);
    }
}
