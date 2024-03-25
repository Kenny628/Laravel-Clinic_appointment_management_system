<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('doctor_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Appointment::class, 'appointment_id');
            $table->longText('symptoms');
            $table->longText('diagnosis');
            $table->longText('prescription');
            $table->longText('test_result')->nullable();
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
        Schema::dropIfExists('patient_records');
    }
}
