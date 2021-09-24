<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        \DB::table('users')->insert(
            [
                [
                    'name' => 'Admin',
                    'email' => 'laraval@mail.ru',
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'login' => 'admin',
                    'is_admin' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Laravel',
                    'email' => 'php@mail.ru',
                    'password' => Hash::make('12345678'),
                    'login' => 'laravel',
                    'is_admin' => false,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Николай',
                    'email' => 'efrem_nn@mail.ru',
                    'password' => Hash::make('12345678'),
                    'login' => 'efrem_nn',
                    'is_admin' => true,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]);
    }
}
