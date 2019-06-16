<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_transaction_master')->unsigned();
            $table->string('name');
            $table->enum('type', ['income', 'expense']);
            $table->double('amount_idr', '9', '2');
            $table->timestamps();
            $table->softDeletes();
            $table->index('id_transaction_master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_detail');
    }
}
