<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlllabtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alllabtests', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('appointment_id');
            $table->string('patient_name');
            $table->string('patient_phoneno');
            $table->string('patient_address');
            $table->string('hospital');
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
        Schema::dropIfExists('alllabtests');
    }
}
