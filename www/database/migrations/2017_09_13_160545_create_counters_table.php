<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icon')->nullable();
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->integer('target_number')->default(1);
            $table->integer('time')->nullable();
            $table->boolean('has_icon')->default(0);
            $table->boolean('has_title')->default(1);
            $table->boolean('has_subtitle')->default(0);
            $table->boolean('has_time')->default(0);
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
        Schema::dropIfExists('counters');
    }
}
