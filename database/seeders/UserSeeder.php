<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name"=> "Admin Client",         
                "email"=> "admin",      
                "password"=> "$2y$12$1ifQo1DVcFxcoSnJxYzCv.iwm89pc1CtlGR0GqzYciVfjw3583MeO"
            ],            
        ];

        DB::table('users')->insert($users);
    }
}
