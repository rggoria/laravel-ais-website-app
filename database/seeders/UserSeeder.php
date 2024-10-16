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
        DB::table('users')->insert([
            [   
                "email"=> "admin",
                "force_password_change" => 0,
                "password"=> "$2y$12$1ifQo1DVcFxcoSnJxYzCv.iwm89pc1CtlGR0GqzYciVfjw3583MeO",
                "role"=> "admin",
                'created_at' => now(),
                'updated_at' => now(),   
            ],
        ]);
    }
}
