<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('email', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('middle_name', 100);
            $table->string('address', 255);
            $table->string('birthdate', 100);
            $table->string('contact_number', 100);
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
}