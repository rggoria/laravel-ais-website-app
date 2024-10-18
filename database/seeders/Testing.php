<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Testing extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_prices')->insert([
            [
                "product_id" => 1,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 1,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 2,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 2,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 3,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 3,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 4,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 4,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 5,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 5,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 6,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 6,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
