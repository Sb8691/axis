<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slider_id');
            $table->string('path');
            $table->text('title');
            $table->text('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('button_text')->nullable();
            $table->text('button_link')->nullable();
            $table->string('button_text_2')->nullable();
            $table->text('button_link_2')->nullable();
            /**/
            $table->boolean('has_subtitle')->default(true);
            $table->boolean('has_description')->default(false);
            $table->boolean('has_button')->default(true);
            $table->boolean('has_button_2')->default(false);
            $table->boolean('is_public')->default(true);
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
        Schema::dropIfExists('slides');
    }
}
