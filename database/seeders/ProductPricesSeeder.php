<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPricesSeeder extends Seeder
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
                "price" => 1299,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 1,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1499,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 2,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 799,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 2,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 3,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 799,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 3,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 4,
                "variant" => "standard",
                "currency" => "SGD",
                "price" => 2299,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 4,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 2499,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 5,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 799,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 5,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 6,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1199,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 6,
                "variant" => "express",
                "currency" => "SGD",
                "price" => 1399,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
