<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Callambulance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Callambulance', function (Blueprint $table) {
            $table->id();
            $table->integer('ambulance_id');
            $table->integer('Patient_id');
            $table->float('distance');
            $table->float('amount');
            $table->integer('paid_status');
            $table->integer('trip_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     //
    // }
}
