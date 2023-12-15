<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
              $table->id();
            $table->timestamps();
            $table->date('visit_date') ;
            $table->time('visit_time');
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->integer('clinic_id');
            $table->string('notes');
            $table->boolean('is_complete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
