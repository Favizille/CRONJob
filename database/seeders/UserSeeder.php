<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Aniekeme Bassey',
                'email' => 'annie@email.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Chidima Diana',
                'email' => 'china@email.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Emeka Haarachukwu',
                'email' => 'emeka@email.com',
                'password' => Hash::make('password123'),
            ],
            
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
