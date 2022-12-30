<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [

                'yellow_title' => "Fresh & Tasty Meals",
                'title' => "Welcome to La Mela Bistro",
                'img' => "assets1/img/slider-1.jpg",
                'content' => "La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
                "is_active" => 1,
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
        DB::table('contacts')->insert(
            [

                'yellow_title' => "Savor The Flavors",
                'title' => "Mediterranean Cuisine",
                'img' => "assets1/img/slider-1.jpg",
                'content' => "La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
                "is_active" => 1,
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );

    }
}

