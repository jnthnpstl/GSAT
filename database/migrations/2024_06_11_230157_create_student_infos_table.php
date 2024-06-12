<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('lname', 100);
            $table->string('fname', 100);
            $table->string('mname', 100);
            $table->string('pob', 100);
            $table->date('dob');
            $table->string('citizenship', 100);
            $table->integer('sex');
            $table->string('civilstatus', 100);
            $table->string('home_address', 100);
            $table->string('contact_number', 50);
            $table->string('email', 100);
            $table->string('degree_program_applied', 100);
            $table->string('major', 100);
            $table->string('apply_for_semester', 100);
            $table->string('prev_applied', 100);
            $table->string('publications', 100);
            $table->string('unpublished', 100);
            $table->string('future_plans', 100);
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
        Schema::dropIfExists('student_infos');
    }
}
