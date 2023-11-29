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
        Schema::create('patientinformations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('appointment_type')->nullable();
            $table->string('appointmentsub_type')->nullable();
            $table->string('title')->nullable();
            $table->string('appo_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country_pin')->nullable();
            $table->string('contact')->nullable();
            $table->string('mail')->nullable();
            $table->string('occupation')->nullable();
            $table->string('marriage_status')->nullable();
            $table->string('lo_doorno')->nullable();
            $table->string('lo_street')->nullable();
            $table->string('lo_location')->nullable();
            $table->string('lo_csc')->nullable();
            $table->string('lo_pincode')->nullable();
            $table->string('switch')->nullable();
            $table->string('per_doorno')->nullable();
            $table->string('per_street')->nullable();
            $table->string('per_location')->nullable();
            $table->string('per_csc')->nullable();
            $table->string('per_pincode')->nullable();
            $table->string('branch')->nullable();
            $table->string('branch_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientinformations');
    }
};
