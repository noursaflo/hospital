<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
              $table->integer('doctor_id');
              $table->date('visit_date');
               $table->string('day');
                 $table->time('start_time');
         $table->time('end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date');
    }
}
