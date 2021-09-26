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
                    'email' => 'admin@mail.ru',
                    'email_verified_at' => now(),
                    'password' => Hash::make(12345678),
                    'login' => 'admin',
                    'is_admin' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Николай',
                    'email' => 'efrem_nn@mail.ru',
                    'email_verified_at' => now(),
                    'password' => Hash::make(12345678),
                    'login' => 'efrem_nn',
                    'is_admin' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Laravel',
                    'email' => 'laravel@mail.ru',
                    'email_verified_at' => null,
                    'password' => Hash::make(12345678),
                    'login' => 'laravel',
                    'is_admin' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
    }
}
