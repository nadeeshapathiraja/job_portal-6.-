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
            $table->string('degree')->nullable();
            $table->string('school_type')->nullable();
            $table->string('school_name')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->dateTime('enrolldate')->nullable();
            $table->string('still_studying')->nullable();
            $table->dateTime('grad_date')->nullable();
            $table->dateTime('exp_graddate')->nullable();
            $table->string('is_graduated')->nullable();
            $table->dateTime('lastenrollyear')->nullable();
            $table->string('future_study')->nullable();
            $table->string('field_of_study')->nullable();
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
