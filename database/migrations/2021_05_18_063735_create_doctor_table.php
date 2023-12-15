<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('clinic_id'); 
            $table->string('full_name');
            $table->integer('age');
            $table->date('birthday');
            $table->string('phone');
            $table->string('specialization');
            $table->string('experience');
            $table->string('address');
            $table->string('email');
            $table->string('password');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
}
