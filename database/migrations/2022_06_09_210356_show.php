<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration show.
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
        Schema::create('show', function(Blueprint $table){
            $table->increments('id');
            $table->string('place', 300);
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('id_admin')->unsigned()->nullable();
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('show');
    }
};
