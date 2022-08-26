<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rooms', function (Blueprint $table) {
            $table->id();
            $table->string('Roomno');
            $table->string('allocateduser');
            $table->string('Roomcharge');
            $table->string('Hospital');
            $table->string('Department');
            $table->string('js');
            $table->string('css');

           
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
