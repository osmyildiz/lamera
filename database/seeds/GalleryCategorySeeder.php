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
            'name'   =>"Food",
            'is_active'   =>1,
            'priority'   =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('gallery_categories')->insert([
            'name'   =>"Venue",
            'is_active'   =>1,
            'priority'   =>2,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);

    }
}
