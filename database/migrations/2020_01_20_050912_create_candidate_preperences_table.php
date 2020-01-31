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
            $table->text('specialization')->nullable();
            $table->string('location_country')->nullable();
            $table->string('location_state')->nullable();
            $table->string('salary_currency')->nullable();
            $table->string('salary_amount')->nullable();
            
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
