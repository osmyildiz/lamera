<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $faker = Faker::create('en_EN');
            DB::table('forms')->insert([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'subject' => $faker->company,
                'message'=> $faker->sentence,
                'created_at'=>date('Y-m-d'),
                'updated_at'=>date('Y-m-d'),
            ]);
        }
    }
}
