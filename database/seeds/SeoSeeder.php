<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seos')->insert(
            [
                'page_name' => "Home",
                'title' => "Lamela Bistro Restaurant",
                'description' => "La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
                'url' => "https://lamelabistro.com",
                "property" => 'website',
                "twitter_name" => "@lamelahackney",
                "logo_url" => 'assets1/img/logo.png',
                'keywords'=>"restaurants near me,food near me,places to eat near me,restaurants nearby,breakfast restaurants,best restaurants near me,lunch,nearby restaurants,steakhouse,italian restaurants",
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
        DB::table('seos')->insert(
            [
                'page_name' => "About",
                'title' => "Lamela Bistro Restaurant",
                'description' => "La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
                'url' => "https://lamelabistro.com",
                "property" => 'website',
                "twitter_name" => "@lamelahackney",
                "logo_url" => 'assets1/img/logo.png',
                'keywords'=>"restaurants near me,food near me,places to eat near me,restaurants nearby,breakfast restaurants,best restaurants near me,lunch,nearby restaurants,steakhouse,italian restaurants",
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
        DB::table('seos')->insert(
            [
                'page_name' => "Menu",
                'title' => "Lamela Bistro Restaurant",
                'description' => "La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
                'url' => "https://lamelabistro.com",
                "property" => 'website',
                "twitter_name" => "@lamelahackney",
                "logo_url" => 'assets1/img/logo.png',
                'keywords'=>"restaurants near me,food near me,places to eat near me,restaurants nearby,breakfast restaurants,best restaurants near me,lunch,nearby restaurants,steakhouse,italian restaurants",
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
        DB::table('seos')->insert(
            [
                'page_name' => "Contact",
                'title' => "Lamela Bistro Restaurant",
                'description' => "La Mela (The Apple) of Homerton is a Bistro Coffee Restaurant in Hackney. We’re open seven days a week serving Breakfast, Lunch and Dinner.",
                'url' => "https://lamelabistro.com",
                "property" => 'website',
                "twitter_name" => "@lamelahackney",
                "logo_url" => 'assets1/img/logo.png',
                'keywords'=>"restaurants near me,food near me,places to eat near me,restaurants nearby,breakfast restaurants,best restaurants near me,lunch,nearby restaurants,steakhouse,italian restaurants",
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
    }
}

