<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcadBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acad_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->integer('student_info_id');
            $table->string('institution_attended', 100);
            $table->string('major_fields', 100);
            $table->string('degree', 100);
            $table->date('date_received');
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
        Schema::dropIfExists('acad_backgrounds');
    }
}
