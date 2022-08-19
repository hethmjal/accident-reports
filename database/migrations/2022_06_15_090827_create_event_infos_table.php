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
        Schema::create('event_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events');
            $table->string('event_category');
            $table->string('eventReceivedinTheRiskUnitWithin');
            $table->string('feedbackReceivedWithInAppropriateTime');
            $table->string('feedbackSentToReportingDepartment');
            $table->string('IncidentAddedToTheRiskRegister');
            $table->integer('status');
            $table->string('likelihood_string');
            $table->string('impact_string');
            $table->integer('likelihood_num');
            $table->integer('impact_num');
            $table->string('likelihood_color');
            $table->string('impact_color');
            $table->string('result_color');
            $table->string('result_string');



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
        Schema::dropIfExists('event_infos');
    }
};
