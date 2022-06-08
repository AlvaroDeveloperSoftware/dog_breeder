<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id_show')->unsigned();
            $table->foreign('id_show')->references('id')->on('show')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_dog')->unsigned();
            $table->foreign('id_dog')->references('id')->on('dog')->onDelete('cascade')->onUpdate('cascade');
            $table->string('handler', 50);
            $table->string('winner', 50);
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
