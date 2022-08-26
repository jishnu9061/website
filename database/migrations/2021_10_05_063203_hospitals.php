<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hospitals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('departments');
            $table->string('category');
            $table->string('time');
            $table->string('acrooms');
            $table->string('rooms');
            $table->string('categoryrooms');
            $table->string('wardbeds');
            $table->string('acroomcharge');
            $table->string('roomcharge');
            $table->string('categoryroomcharge');
            $table->string('wardbedcharge');
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
        //
    }
}
