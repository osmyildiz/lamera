<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->String('work_day1');
            $table->String('work_day1_hours');
            $table->String('work_day2');
            $table->String('work_day2_hours');
            $table->String('work_day3');
            $table->String('work_day3_hours');
            $table->String('slider_img');
            $table->String('phone');
            $table->String('phone1');
            $table->String('address');
            $table->String('email');
            $table->String('email1');
            $table->String('map_url');
            $table->String('instagram');
            $table->String('facebook');
            $table->String('twitter');
            $table->String('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
