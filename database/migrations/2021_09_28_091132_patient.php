<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('legalnamechecked');
            $table->string('legalname');
            $table->string('formername');
            $table->string('doctornotes');
            $table->string('files');
            $table->string('legalnamechecked');
            $table->string('birthdate');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('address');
            $table->string('socialsecurityno');
            $table->string('homephoneno');
            $table->string('cellphoneno');
            $table->string('occupation');
            $table->string('employer');
            $table->string('employerphno');
          
        });

        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
