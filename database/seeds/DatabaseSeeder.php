<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            MenuSeeder::class,
            CategorySeeder::class,
            AboutSeeder::class,
            SliderSeeder::class,
            GallerySeeder::class,
            GalleryCategorySeeder::class,
            BookingSeeder::class,
            ReservationSeeder::class,
            ContactSeeder::class,
            TestimonialSeeder::class,
            FormSeeder::class,
            SeoSeeder::class



        ]);
    }
}
