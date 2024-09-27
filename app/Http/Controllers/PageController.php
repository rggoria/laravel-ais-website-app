<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $productItems = [
            [
                "id"=> 1,
                "title"=> "Employment Pass",
                "type"=> "Standard",
                "price"=> "S$999",
            ], [
                "id"=> 2,
                "title"=> "Dependent Pass",
                "type"=> "Standard",
                "price"=> "S$799",
            ], [
                "id"=> 3,
                "title"=> "Long Term Visit Pass",
                "type"=> "Standard",
                "price"=> "S$799",
            ], [
                "id"=> 4,
                "title"=> "One-Pass",
                "type"=> "Standard",
                "price"=> "S$1,999",
            ], [
                "id"=> 5,
                "title"=> "One-Pass",
                "type"=> "Custom",
                "price"=> "S$200",
            ], [
                "id"=> 6,
                "title"=> "Professional Employer Organisation (PEO)",
                "type"=> "Standard",
                "price"=> "To quote separately",
            ], [
                "id"=> 7,
                "title"=> "Professional consultation",
                "type"=> "For employees, employers or individuals who are interested in working within Singapore but have yet to receive an employment offer.",
                "price"=> "Price ranging from S$200 per session",
            ], [
                "id"=> 8,
                "title"=> "Workforce planning",
                "type"=> "For employers only",
                "price"=> "Price ranging from S$200 per session",
            ],
        ];


        return view("pages.index", [
            "productItems"=> $productItems,
        ]);
    }
}
