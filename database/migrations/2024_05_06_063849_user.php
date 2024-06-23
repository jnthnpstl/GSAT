<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->id();
         
            $table->string('firstname', 100);
            $table->string('middlename', 100)->nullable();
            $table->string('lastname', 100);
            $table->string('contact_number', 100)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('civil_status', 100)->nullable();
            $table->string('citizenship', 100)->nullable();
            $table->string('username', 100);
            $table->string('email', 100);
            $table->string('password', 100);
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
        //
        Schema::dropIfExists('users');
    }
}
