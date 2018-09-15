<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountHolder extends Migration
{

    public function up()
    {
        Schema::create('new_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->string('aadhaar')->unique();
            $table->string('pan')->unique();
            $table->string('name');
            $table->string('sex');
            $table->string('address');
            $table->string('email')->unique();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
