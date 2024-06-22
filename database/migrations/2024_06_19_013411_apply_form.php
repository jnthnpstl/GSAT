<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplyForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('apply_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('present_occupation', 100)->nullable();
            $table->string('employer', 100)->nullable();
            $table->string('business_address', 100)->nullable();
            $table->string('academic_background', 100)->nullable();
            $table->string('degree_id')->nullable();
            $table->string('opportunity', 100)->nullable();
            $table->string('semester_applying', 100)->nullable();
            $table->string('previously_applied', 100)->nullable();
            $table->date('date_submitted')->nullable();
            $table->string('it_was', 100)->nullable();
            $table->string('occupational_experience', 100)->nullable();
            $table->string('membership_honor', 100)->nullable();
            $table->string('scholarship', 100)->nullable();
            $table->string('publications', 100)->nullable();
            $table->string('unpublished', 100)->nullable();
            $table->string('recommend', 100)->nullable();
            $table->string('future_plans', 100)->nullable();
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
        Schema::dropIfExists('apply_form');
    }
}
