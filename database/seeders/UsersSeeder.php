<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Majid shah',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => 'password'
            ],
            [
                'name' => 'Ali Shah',
                'email' => 'user@gmail.com',
                'is_admin' => '0',
                'password' => 'password'
            ],
        ];

        foreach ($data as $user) {
            (new User())->create($user);
        }
    }
}
