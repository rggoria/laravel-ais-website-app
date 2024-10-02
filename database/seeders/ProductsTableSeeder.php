<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                "title"=> "Employment Pass ★",
                "description"=> json_encode([
                    "Our top pick.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ]),
                "pricing_details"=> "S$999",
            ],
            [
                "title"=> "Dependent Pass",
                "description"=> json_encode([
                    "For pass holders who wish to bring their spouse and children to Singapore.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ]),
                "pricing_details"=> "S$799",
            ],
            [
                "title"=> "Long Term Visit Pass",
                "description"=> json_encode([
                    "For pass holders who wish to bring their parents to Singapore.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ]),
                "pricing_details"=> "S$799",
            ],
            [
                "title"=> "One-Pass",
                "description"=> json_encode([
                    "For outstanding individuals who are getting a premium work pass.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365) and an employment screening record (ranging from S$200 - S$500).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ]),
                "pricing_details"=> "S$1,999",
            ],
            [
                "title"=> "Express service - Pass applications only",
                "description"=> json_encode([
                    "Our express services guarantee that work pass services are finalised within 24 hours on any business day, providing quick and effective solutions for your urgent requirements.",
                ]),
                "pricing_details"=> "To quote separately",
            ],
            [
                "title"=> "Professional Employer Organisation (PEO)",
                "description"=> json_encode([
                    "Our PEO/EOR service handles employee onboarding, work pass applications, payroll, and compliance, allowing you to hire talent in Singapore without the need to establish a local entity.",
                ]),
                "pricing_details"=> "To quote separately",
            ],
            [
                "title"=> "Professional consultation",
                "description"=> json_encode([
                    "Our customised consultation service provides personalised immigration solutions, ensuring smooth work pass applications, compliance, and strategic advice to address your specific requirements.",
                ]),
                "pricing_details"=> "Price ranging from S$200 per session",
            ],
            [
                "title"=> "Workforce planning",
                "description"=> json_encode([
                    "Whether it's workforce expansion, retention strategies, or business growth, we got you covered.",
                ]),
                "pricing_details"=> "Price ranging from S$200 per session",
            ],
        ];

        DB::table('products')->insert($products);
    }
}
