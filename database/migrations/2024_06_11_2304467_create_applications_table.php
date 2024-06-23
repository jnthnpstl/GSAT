<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_info_id');
            $table->unsignedBigInteger('acad_background_id');
            $table->unsignedBigInteger('exam_schedule_id');
            $table->unsignedBigInteger('interview_sched_id');
            $table->foreign('student_info_id')->references('id')->on('student_infos')->onDelete('cascade');
            $table->foreign('acad_background_id')->references('id')->on('acad_backgrounds')->onDelete('cascade');
            $table->foreign('exam_schedule_id')->references('id')->on('exam_schedules')->onDelete('cascade');
            $table->foreign('interview_sched_id')->references('id')->on('interview_schedules')->onDelete('cascade');
            $table->integer('exam_status');
            $table->integer('interview_status');
            $table->string('OR', 100);
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
        Schema::dropIfExists('applications');
    }
}
