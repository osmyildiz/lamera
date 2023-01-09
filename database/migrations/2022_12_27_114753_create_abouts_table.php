<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->String('yellow_title');
            $table->String('title');
            $table->text('content1');
            $table->String('img');
            $table->String('img1');
            $table->String('slider_img');
            $table->String('box1_title');
            $table->String('box1_content');
            $table->String('box2_title');
            $table->String('box2_content');
            $table->String('box3_title');
            $table->String('box3_content');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->text('meta_title');
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
        Schema::dropIfExists('abouts');
    }
}
