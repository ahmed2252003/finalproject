<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'     => 'Admin',
                'username' => 'admin',
                'email'    => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
                'status'   => 'active',
            ],
            [
                'name'     => 'User',
                'username' => 'user',
                'email'    => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'role'     => 'user',
                'status'   => 'active',
            ],
        ];
        
        foreach ($data as $userData) {
            DB::table('users')->insert($userData);
        }
        
    }
}
