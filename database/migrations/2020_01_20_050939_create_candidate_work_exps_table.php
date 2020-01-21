<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateWorkExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_work_exps', function (Blueprint $table) {
            $table->increments('candidate_workexp_id');
            $table->timestamps();
            //$table->integer('candidate_profile_id');
            $table->string('employername');
            $table->string('industry');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('position');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('still_working');
            $table->string('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_work_exps');
    }
}
