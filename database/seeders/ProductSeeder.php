<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                "name" => "Employment Pass (EP) Application",
                "description" => "Our most popular package, tailored for most individuals. Some key facts include:",
                "details" => json_encode([
                    "Will draw a minimum salary of S$5,000 for non-financial services sector, S$5,500 for financial services (From 1 Jan 2025, it will be increased to $5,600 and S$6,200 respectively)",
                    "Able to bring in family members through Dependent Passes and Long Term Visit Passes (LTVP) - Additional costs apply",
                    "Pass validity between 2 to 5 years 2 free appeals to MOM for any rejected applications.",
                ]),
                "disclaimer" => "While we are confident of our application success rates, there may be instances beyond our control that would result in a pass rejection. Fret not, our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.",
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                "name" => "Dependent Pass (DP) Application",
                "description" => "Tailored for individuals who are bringing in their spouse and children below age 21.",
                "details" => json_encode([
                    "Main pass holder (Working parent) must draw a minimum salary of S$6,000.",
                    "For legally married spouse and Unmarried children under 21 years old, including legally adopted children.",
                    "Pass validity tagged to main pass holder (Working parent): between 2 to 5 years 2 free appeals to MOM for any rejected applications.",
                ]),
                "disclaimer" => "While we are confident of our application rates, there may be instances beyond our control that would result in a pass rejection. Fret not, our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.",
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                "name" => "Long Term Visit Pass (LTVP) Application",
                "description" => "Tailored for individuals who are bringing in family members who are not eligible for a dependent pass.",
                "details" => json_encode([
                    "Main pass holder (Working parent) must draw a minimum salary of S$6,000.",
                    "For common-law spouse, Unmarried handicapped children aged 21 and above, Unmarried step-children under 21 years old and parents (if mass pass holder - working parent, is earning at least S$12,000).",
                    "Pass validity tagged to main pass holder (Working parent): between 2 to 5 years 2 free appeals to MOM for any rejected applications.",
                ]),
                "disclaimer" => "While we are confident of our application rates, there may be instances beyond our control that would result in a pass rejection. Fret not, our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.",
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                "name" => "OnePass Application",
                "description" => "The creme de la creme, piéce de resistance work pass available. Tailored for high income earners (Earning or will earn more than SS30,000 a month). We will order and absorb charges for employment verification proof if required to fulfil the government's (MOM) requirement.",
                "details" => json_encode([
                    "Have drawn at least SS30,000 equivalent in fixed salary for the past 12 months, or will earn SS30,000 equivalent in the new job. If salary criteria not met you may still qualify if you have outstanding achievements in certain sectors.",
                    "For common-law spouse, Unmarried handicapped children aged 21 and above, Unmarried step-children under 21 years old and parents (if mass pass holder - working parent, is earning at least S$12,000).",
                    "Pass validity tagged to main pass holder (Working parent): between 2 to 5 years 2 free appeals to MOM for any rejected applications.",
                ]),
                "disclaimer" => "While we are confident of our application rates, there may be instances beyond our control that would result in a pass rejection. Fret not our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.",
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                "name" => "Work Pass Appeals",
                "description" => "Had your work pass rejected and unsure on how to proceed? Speak to us for a second opinion and allow us to draft an action plan to strengthen your appeal.",
                "details" => json_encode([
                    "MOM only allows up to 2 appeals per application.",
                    "If you had used up both attempts, you will need to submit a new application to MOM.",
                ]),
                "disclaimer" => "While we are confident of our application rates, there may be instances beyond our control that would result in a pass rejection. Fret not our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.",
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                "name" => "Work Pass Renewals",
                "description" => "Did you know that you can renew your work pass 6 months in advance? Timely renewal can provide assurance to your employees and ensures business continuity. Some key facts include:",
                "details" => json_encode([
                    "Will draw a minimum salary of S$5,000 for non-financial services sector, S$5,500 for financial services (From 1 Jan 2025, it will be increased to $5,600 and S$6,200 respectively).",
                    "Able to bring in family members through Dependent Passes and Long-Term Visit Passes (LTVP) - Additional costs apply.",
                    "Pass validity between 2 to 3 years.",
                    "2 free appeals to MOM for any rejected applications.",
                ]),
                "disclaimer" => "While we are confident of our application rates, there may be instances beyond our control that would result in a pass rejection. Fret not our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
