<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('select_lable');
            $table->string('select_customer');
            $table->string('invoice_date');
            $table->string('subject');
            $table->string('total');
            $table->string('discount');
            $table->string('net_total');
            $table->string('terms_&_condition');
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
        Schema::dropIfExists('totals');
    }
}
