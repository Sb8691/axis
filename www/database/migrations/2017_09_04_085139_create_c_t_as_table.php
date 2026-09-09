<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_t_a_s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('button_link');
            $table->string('button_text');
            $table->boolean('has_title')->default(true);
            $table->boolean('has_subtitle')->default(true);
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
        Schema::dropIfExists('c_t_as');
    }
}
