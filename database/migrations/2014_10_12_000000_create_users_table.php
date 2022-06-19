<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration users like breeders.
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
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('email', 200)->unique();
            $table->string('name', 30);
            $table->string('surnames', 100);
            $table->string('breed', 100);
            $table->integer('years_breed');
            $table->string('photo', 500)->nullable();
            $table->string('affix', 50)->unique();
            $table->string('phone', 9 )->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
