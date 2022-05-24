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
        Schema::create('dog', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 30);
            $table->integer('date_of_birth');
            $table->enum('sex',  ['Male', 'Female']);
            $table->string('breed', 100);
            $table->double('height');
            $table->double('weight');
            $table->string('health_tests', 300);

            $table->integer('user_breed_id')->unsigned();
            $table->foreign('user_breed_id')->references('id')->on('user_breed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dog');
    }
};
