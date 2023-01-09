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
            'is_active'   =>1,
            'priority'   =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Lunch",
            'slug'   =>"lunch",
            'is_active'   =>1,
            'priority'   =>2,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Sandwiches",
            'slug'   =>"sandwiches",
            'is_active'   =>1,
            'priority'   =>3,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Kids Menu",
            'slug'   =>"kids",
            'is_active'   =>1,
            'priority'   =>4,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('categories')->insert([

            'name'   =>"Pancakes",
            'slug'   =>"pancakes",
            'is_active'   =>1,
            'priority'   =>5,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
