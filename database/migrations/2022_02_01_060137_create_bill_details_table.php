<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->id();
            $table->string('bill_no');
            $table->string('date');
            $table->string('patient_type');
            $table->string('opd_no');
            $table->string('ipd_no');
            $table->string('patient_name');
            $table->string('doctor_name');
            $table->string('medicine_category_name');
            $table->string('medicine_name');
            $table->string('Batch_no');
            $table->string('expiry_date');
            $table->string('avilable_quantity');
            $table->string('sale_price');
            $table->string('amount');
            $table->string('note');
            $table->string('total');
            $table->string('discount');
            $table->string('tax');
            $table->string('net_amount');
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
        Schema::dropIfExists('bill_details');
    }
}
