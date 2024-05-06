<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_form', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('posting_id');
            $table->tinyInteger('payment');
            $table->string('upload', 100);
            $table->tinyInteger('payment_verification');
            $table->tinyInteger('confirmation');
            
            $table->timestamp(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_form');
    }
}
