<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Adit',
                'email' => 'adit123@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'operator'
            ],
            [
                'name' => 'Rafy',
                'email' => 'rafy123@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ]
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
