<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert(
            [
                'name' => "Cristina Conde",
                'job' => "Customer",
                'img' => "assets1/img/client/testimonial-1.jpg",
                'content' => "A great spot! I’ve gone back multiple times to try different dishes. The veg full English is delicious - so are the pancakes and bagels! A great deal on pizzas as well. The staff is very accommodating and helpful. Quick service and affordable pricing.",
                "is_active" => 1,
                "priority" => 1,
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
        DB::table('testimonials')->insert(
            [
                'name' => "Kate Dexter",
                'job' => "Customer",
                'img' => "assets1/img/client/testimonial-2.jpg",
                'content' => "So impressed it’s a jewel - you’d think by such a busy road it wouldn’t feel so good but it’s set back enough and with friendly staff plus a chef who clearly cares it’s a 5 star. Food tastes fresh and is well presented, with an interesting choice. Doggies welcomed with a water bowl too.",
                "is_active" => 1,
                "priority" => 2,
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
        DB::table('testimonials')->insert(
            [
                'name' => "Daniel Bruce",
                'job' => "Customer",
                'img' => "assets1/img/client/testimonial-3.jpg",
                'content' => "Outstanding place! I had the opportunity to have lunch there yesterday. It was fantastic! Great drinks, delicious meal, wonderful cup of fruit tea. I highly recommend it. The best of it was the first class service they provided. Well done! Will definitely go back. ",
                "is_active" => 1,
                "priority" => 3,
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
    }
}
