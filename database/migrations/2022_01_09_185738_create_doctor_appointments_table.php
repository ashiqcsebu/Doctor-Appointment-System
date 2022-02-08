<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAppointmentsTable extends Migration
{
    

    public function up()
    {
        Schema::create('doctor_appointments', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->string('booking_date');
            $table->string('appointment_date');
            $table->Integer('doctor_id');
             $table->integer('status')->default(0);
            $table->timestamps();
        });
    }







    public function down()
    {
        Schema::dropIfExists('doctor_appointments');
    }
}
