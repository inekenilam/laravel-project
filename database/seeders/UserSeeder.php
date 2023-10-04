<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name'=>'admin',
            'email'=>'nilam@gamail.com',
            'password'=>bcrypt('rahasia')
         
        ]);
        User::create([
            'name'=>'admin',
            'email'=>'nilam@gamail.com',
            'password'=>bcrypt('kasihtauye')
         
        ])
    }
}
