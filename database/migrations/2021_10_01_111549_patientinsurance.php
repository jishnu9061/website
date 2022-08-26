<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patientinsurance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Patientinsurance', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('occupation');
            $table->string('employer');
            $table->string('empphoneno');
            $table->string('empaddress');
            $table->string('bday');
            $table->string('groupno');
            $table->string('policyno');
            $table->string('copayment');
            $table->string('patienthere');
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
