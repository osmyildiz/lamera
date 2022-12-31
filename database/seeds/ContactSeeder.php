<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'work_day1'   =>"Mon-Thu",
            'work_day1_hours'   =>"9:00am-7:00pm",
            'work_day2'   =>"Fri-Sat",
            'work_day2_hours'   =>"9:00am-9:00pm",
            'work_day3'   =>"Sunday",
            'work_day3_hours'   =>"9:00am-7:00pm",
            'slider_img'   =>"assets1/img/slider-2.jpg",
            'phone' =>"02085100801",
            'phone1' =>"02085100801",
            'address' =>"25-27, MARSH HILL LONDON E9 5QA",
            'email'  =>" lamelabistro@gmail.com",
            'email1'  =>" lamelabistro@gmail.com",
            'instagram' =>"https://www.instagram.com/lamelahackney/?hl=en",
            'linkedin' =>"",
            'map_url' =>"",
            'facebook' =>"https://en-gb.facebook.com/LaMelaHackney/",
            'twitter' =>"https://twitter.com/lamelahackney?lang=en",
            'description' =>"La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
