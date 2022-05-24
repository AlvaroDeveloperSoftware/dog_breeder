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
            $table->integer('user_normal_id')->unsigned();
            $table->foreign('user_normal_id')->references('id')->on('user_normal');
            $table->integer('id_dog')->unsigned();
            $table->foreign('id_dog')->references('id')->on('dog');
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
