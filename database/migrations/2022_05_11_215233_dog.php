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
            $table->date('date_of_birth');
            $table->enum('sex',  ['Male', 'Female']);
            $table->string('breed', 100);
            $table->double('height');
            $table->double('weight');
            $table->string('health_tests', 300);

            $table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('dog');
    }
};
