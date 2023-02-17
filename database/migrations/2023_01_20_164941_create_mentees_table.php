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
        Schema::create('mentees', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('fullname');
            $table->string('phone');
            $table->string('gender');
            $table->string('describes');
            $table->string('location');
            $table->string('age');
            $table->string('area_in_mentor');
            $table->string('issues_or_challenges');
            $table->string('goals_objectives');
            $table->string('want_to_be_a_mentor');
            $table->string('additional_information');
            $table->string('skill');
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
        Schema::dropIfExists('mentees');
    }
};
