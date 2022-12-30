<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_categories')->insert([
            'name'   =>"Venue",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('gallery_categories')->insert([
            'name'   =>"Food",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);

    }
}
