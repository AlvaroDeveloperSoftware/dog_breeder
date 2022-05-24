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
        Schema::create('owner_dog', function(Blueprint $table){
            $table->integer('id_owner')->unsigned();
            $table->foreign('id_owner')->references('id')->on('owner');
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
        Schema::dropIfExists('owner_dog');
    }
};
