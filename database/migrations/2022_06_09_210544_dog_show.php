<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration dog_show.
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
        Schema::create('dog_show', function(Blueprint $table){
            $table->string('handler', 50);
            $table->string('winner', 50);
            $table->integer('id_show')->unsigned();
            $table->foreign('id_show')->references('id')->on('show')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_dog')->unsigned();
            $table->foreign('id_dog')->references('id')->on('dog')->onDelete('cascade')->onUpdate('cascade');
           
            $table->primary(['id_show', 'id_dog']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dog_show');
    }
};