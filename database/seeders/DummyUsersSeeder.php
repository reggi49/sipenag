<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'johndoe@hotmail.com',
                'level' => '1',
                'password' => bcrypt('07070707'),
            ],
            [
                'name' => 'Regular User',
                'email' => 'reguser@gmail.com',
                'level' => '0',
                'password' => bcrypt('07070707'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
