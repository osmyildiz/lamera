<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert(
            [

                'res_date' => "2023-01-01",
                'name' => "Osman YILDIZ",
                'time' => "12:00",
                'email' => "osmyildiz@gmail.com",
                "phone" => "905536141190",
                "message" => "Book a table near the window",
                "description" => "checked",
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d"),
            ]
        );
    }
}

