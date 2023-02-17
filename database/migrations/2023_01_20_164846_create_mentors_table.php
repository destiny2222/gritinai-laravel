<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('fullname');
            $table->string('phone');
            $table->string('gender');
            $table->string('describes');
            $table->string('family');
            $table->string('location');
            $table->string('age');
            $table->string('area_in_mentor');
            $table->string('work_status', 200);
            $table->string('level_of_education');
            $table->string('work_experience', 200);
            $table->string('have_you_been_a_mentor_before');
            $table->string('mentoring_experience',200);
            $table->string('professional_experience', 200);
            $table->string('accomplishment', 200);
            $table->string('goals_and_objectives', 200);
            $table->string('want_to_be_a_mentor', 200);
            $table->string('additional_information', 200);
            $table->string('skill', 200);
            $table->string('indicate');
            $table->string('contact_with_your_mentee');
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
        Schema::dropIfExists('mentors');
    }
};
