<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnoseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnose', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('diagnose_date');
            $table->integer('doctor_id');
            $table->integer('patient_id');
            $table->text('complaint');
            $table->text('solution');
            $table->text('comments');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnose');
    }
}
