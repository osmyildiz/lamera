<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'url' => "assets1/img/gallery/gallery-1.jpg",
            'category_id' => 2,
            'is_active'=>0,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('galleries')->insert([
            'url' => "assets1/img/gallery/gallery-2.jpg",
            'category_id' => 1,
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('galleries')->insert([
            'url' => "assets1/img/gallery/gallery-3.jpg",
            'category_id' => 1,
            'is_active'=>1,
            'priority'=>2,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('galleries')->insert([
            'url' => "assets1/img/gallery/gallery-4.jpg",
            'category_id' => 1,
            'is_active'=>1,
            'priority'=>3,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('galleries')->insert([
            'url' => "assets1/img/gallery/gallery-5.jpg",
            'category_id' => 1,
            'is_active'=>1,
            'priority'=>4,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('galleries')->insert([
            'url' => "assets1/img/gallery/gallery-6.jpg",
            'category_id' => 2,
            'is_active'=>1,
            'priority'=>5,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
    }
}
