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
        Schema::create('user_breed', function(Blueprint $table){
            $table->increments('id');
            $table->string('email', 200)->unique();
            $table->string('name', 30);
            $table->string('surnames', 100);
            $table->string('breed', 100);
            $table->integer('years_breed');
            $table->string('photo', 500)->nullable();
            $table->string('affix', 50);
            $table->string('phone', 9 );
            $table->string('password', 20);
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
        Schema::dropIfExists('user_breed');
    }
};
