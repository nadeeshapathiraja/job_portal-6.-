<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_education', function (Blueprint $table) {
            
            $table->increments('candidate_educ_id');
            $table->timestamps();
            $table->string('degree');
            $table->string('school_type');
            $table->string('school_name');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->dateTime('enrolldate');
            $table->string('still_studying');
            $table->dateTime('grad_date');
            $table->dateTime('exp_graddate');
            $table->string('is_graduated');
            $table->dateTime('lastenrollyear');
            $table->string('future_study');
            $table->string('field_of_study');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_education');
    }
}
