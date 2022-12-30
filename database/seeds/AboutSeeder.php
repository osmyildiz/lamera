<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([

            'yellow_title'   =>"Explore Our Story",
            'title'   =>"Nothing brings people together like good food",
            'content'   =>"At La Mela we strive to make you feel at ease, providing service with a welcoming smile in a timeless setting. You’ll experience a continental coffee house vibe with a buzzy atmosphere that radiates warmth, comfort and relaxation.

Book your special event at La Mela and enjoy our excellent service and exquisite food.

We’re happy to host and cater for your event or party. We have various options and packages to suit all budgets and sizes, so contact us today and let us help you organise the perfect party.

We cater for all types of events, from weddings to company meetings and birthdays.

La Mela Bistro is the perfect location for your special day.",
            'img'   =>"assets1/img/about-1.jpg",
            'img1'   =>"assets1/img/about-2.jpg",
            'slider_img'   =>"assets1/img/slider-2.jpg",
            'box1_title'   =>"Premium Quality",
            'box1_content'   =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua",
            'box2_title' =>"100% ECO Ingredients",
            'box2_content' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua",
            'box3_title' =>"Wood Burned Grill",
            'box3_content'  =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
