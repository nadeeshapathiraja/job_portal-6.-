<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatePreperencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_preperences', function (Blueprint $table) {
            $table->increments('candidate_preference_id');
            $table->timestamps();
            //$table->integer('candidate_profile_id');;
            $table->text('specialization');;
            $table->string('location_country');
            $table->string('location_state');
            $table->string('salary_currency');
            $table->string('salary_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_preperences');
    }
}
