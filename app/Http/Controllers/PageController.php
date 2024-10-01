<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view("pages.main.index");
    }

    public function about() {
        return view("pages.main.about");
    }

    public function services() {
        $productItems = [
            [
                "id"=> 1,
                "title"=> "Employment Pass ★",
                "description"=> [
                    "Our top pick.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ],
                "price"=> "S$999",
            ], [
                "id"=> 2,
                "title"=> "Dependent Pass",
                "description"=> [
                    "For pass holders who wish to bring their spouse and children to Singapore.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ],
                "price"=> "S$799",
            ], [
                "id"=> 3,
                "title"=> "Long Term Visit Pass",
                "description"=> [
                    "For pass holders who wish to bring their parents to Singapore.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ],
                "price"=> "S$799",
            ], [
                "id"=> 4,
                "title"=> "One-Pass",
                "description"=> [
                    "For outstanding individuals who are getting a premium work pass.",
                    "Every package comes with two complimentary appeals (worth S$400) and MOM fees (worth $365) and an employment screening record (ranging from S$200 - S$500).",
                    "We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.",
                ],
                "price"=> "S$1,999",
            ], [
                "id"=> 5,
                "title"=> "Express service - Pass applications only",
                "description"=> [
                    "Our express services guarantee that work pass services are finalised within 24 hours on any business day, providing quick and effective solutions for your urgent requirements.",
                ],
                "price"=> "To quote separately",
            ], [
                "id"=> 6,
                "title"=> "Professional Employer Organisation (PEO)",
               "description"=> [
                    "Our PEO/EOR service handles employee onboarding, work pass applications, payroll, and compliance, allowing you to hire talent in Singapore without the need to establish a local entity.",
                ],
                "price"=> "To quote separately",
            ], [
                "id"=> 7,
                "title"=> "Professional consultation",
                "description"=> [
                    "Our customised consultation service provides personalised immigration solutions, ensuring smooth work pass applications, compliance, and strategic advice to address your specific requirements.",
                ],
                "price"=> "Price ranging from S$200 per session",
            ], [
                "id"=> 8,
                "title"=> "Workforce planning",
                "description"=> [
                    "Whether it's workforce expansion, retention strategies, or business growth, we got you covered.",
                ],
                "price"=> "Price ranging from S$200 per session",
            ],
        ];
        
        return view("pages.main.services", [
            "productItems"=> $productItems
        ]);
    }

    public function testimonials() {
        return view("pages.main.testimonial");
    }

    public function ep_application() {
        return view("pages.main.ep-application");
    }

    public function dp_application() {
        return view("pages.main.dp-application");
    }

    public function ltvp_application() {
        return view("pages.main.ltvp-application");
    }

    public function op_application() {
        return view("pages.main.op-application");
    }

    public function consultation() {
        return view("pages.main.consultation");
    }

}
