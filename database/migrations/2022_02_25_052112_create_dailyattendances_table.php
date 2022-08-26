<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyattendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailyattendances', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('month');
            $table->string('date');
            $table->string('staffid');
            $table->string('attendance');
            $table->string('hospital');
            $table->string('department');
            $table->string('status');
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
        Schema::dropIfExists('dailyattendances');
    }
}
