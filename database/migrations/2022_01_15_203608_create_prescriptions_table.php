<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            

            $table->id();
            $table->string('name_of_disease')->nullable();
            $table->string('symptoms')->nullable();
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->string('date');
            $table->text('medicine')->nullable();
            $table->text('procedure_to_use_medicine')->nullable();
            $table->text('next_meet')->nullable();
             $table->text('feedback')->nullable();
            $table->string('signature')->nullable();

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
        Schema::dropIfExists('prescriptions');
    }
}
