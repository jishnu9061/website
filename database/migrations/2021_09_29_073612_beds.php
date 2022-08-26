<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Beds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
  {
       Schema::create('beds', function (Blueprint $table) {
            $table->id();
            $table->string('bedname');
            $table->string('allocateduser');
            $table->string('bedcharge');
            $table->string('status');
            $table->string('time');

          
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
