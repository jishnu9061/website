<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('rolename');
            $table->string('hospital');
            $table->string('departments');
            $table->string('category');
            $table->string('extra');
            $table->string('previlage');
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
