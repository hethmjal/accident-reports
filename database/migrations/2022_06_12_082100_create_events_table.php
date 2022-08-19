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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamp('event-date')->nullable();
            $table->string('location')->nullable();
            $table->string('reporting-department')->nullable();
            $table->string('responding-department')->nullable();
            $table->string('other-department')->nullable();
            $table->string('patient-name')->nullable();
            $table->string('medical-record')->nullable();
            $table->string('employee')->nullable();
            $table->string('visitor')->nullable();
            $table->string('other')->nullable();
            $table->string('whatIsBeingReported')->nullable();
            $table->text('event-detail')->nullable();
            $table->date('date')->nullable();
            $table->string('reporter-name')->nullable();
            $table->string('reporter-phone')->nullable();
            $table->string('reporter-email')->nullable();
            $table->string('reporter-position')->nullable();
            $table->text('action-taken')->nullable();
            $table->string('typeOfInjury')->nullable();
            $table->string('levelOFHarm')->nullable();
            $table->string('likelihoodCategory')->nullable();
            $table->string('medicationError')->nullable();
            $table->json('contriputingFactors')->nullable();
            $table->integer('status')->default(0)->nullable();
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
        Schema::dropIfExists('events');
    }
};
