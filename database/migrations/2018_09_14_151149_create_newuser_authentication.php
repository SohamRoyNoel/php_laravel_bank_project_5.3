<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewuserAuthentication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_confirms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('new_registered_user_phone');
            $table->string('isAuthenticated')->default('1');
            $table->string('byManualAdmin')->default('Soham');
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
        Schema::dropIfExists('user_confirm');
    }
}
