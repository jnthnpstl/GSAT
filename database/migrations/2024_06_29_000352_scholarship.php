<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Scholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::connection('mysql2')->create('scholarships', function($table)
        {
        $table->id();
        $table->unsignedBigInteger('user_id')->references('id')->on('users')->onDelete('cascade');;
        $table->string('scholarsihp',100)
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

        Schema::dropIfExists('scholarships');
    }
}
