<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'johndoe@hotmail.com',
                'is_admin' => '1',
                'password' => bcrypt('07070707'),
            ],
            [
                'name' => 'Regular User',
                'email' => 'reguser@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('07070707'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
