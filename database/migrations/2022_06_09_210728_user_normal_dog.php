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
        Schema::create('user_normal_dog', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_dog')->unsigned()->nullable();
            $table->foreign('id_dog')->references('id')->on('dog')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_user_normal')->unsigned()->nullable();
            $table->foreign('id_user_normal')->references('id')->on('user_normal')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('like');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_normal_dog');
    }
};