<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            'name'   =>"Brunch",
            'slug'   =>"brunch",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Lunch",
            'slug'   =>"lunch",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Sandwiches",
            'slug'   =>"sandwiches",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Kids Menu",
            'slug'   =>"kids",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Pancakes",
            'slug'   =>"pancakes",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
