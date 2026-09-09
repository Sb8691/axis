<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_id');
            /* IF IS REVOLUTON */
            $table->string('title_Y_pos')->nullable();
            $table->string('title_X_pos')->nullable();
            $table->string('title_visibility')->nullable();
            $table->string('subtitle_Y_pos')->nullable();
            $table->string('subtitle_X_pos')->nullable();
            $table->string('subtitle_visibility')->nullable();
            $table->string('description_Y_pos')->nullable();
            $table->string('description_X_pos')->nullable();
            $table->string('description_visibility')->nullable();
            $table->string('button_Y_pos')->nullable();
            $table->string('button_X_pos')->nullable();
            $table->string('button_visibility')->nullable();
            $table->string('button_2_Y_pos')->nullable();
            $table->string('button_2_X_pos')->nullable();
            $table->string('button_2_visibility')->nullable();
            $table->boolean('is_visibility_supported')->default(0);
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
        Schema::dropIfExists('slide_settings');
    }
}
