<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_customer', function (Blueprint $table) {
            $table->increments('id_shipping');
            $table->string('id_customer');
            $table->string('customer_id');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->string('customer_note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_customer');
    }
}
