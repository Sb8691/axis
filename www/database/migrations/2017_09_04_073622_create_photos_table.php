<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->string('path');
            $table->text('description')->nullable();
            $table->string('link')->nullable();
            $table->string('minimal_dimensions', 25)->nullable();
            $table->boolean('was_cropped')->default(false);
            $table->boolean('has_description')->default(false);
            $table->boolean('has_link')->default(false);
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
        Schema::dropIfExists('photos');
    }
}
