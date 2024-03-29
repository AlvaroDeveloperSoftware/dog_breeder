<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration Gallery.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_dog')->unsigned();
            $table->foreign('id_dog')->references('id')->on('dog')->onDelete('cascade')->onUpdate('cascade');
            $table->string('video', 500)->nullable();
            $table->string('photo', 500)->nullable();
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
        Schema::dropIfExists('gallery');
    }
};