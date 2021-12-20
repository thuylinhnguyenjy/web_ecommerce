<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('user_id');
            $table->string('user_name', 50);
            $table->string('user_email', 50);
            $table->string('user_phone', 50);
            $table->float('amount');
            $table->string('payment', 32);
            $table->string('payment_info', 255);
            $table->string('message', 255);
            $table->string('security', 16);
            $table->timestamp('created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
