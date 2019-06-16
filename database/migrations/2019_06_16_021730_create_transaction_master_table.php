<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->string('code');
            $table->double('rate_euro', 8, 2);
            $table->datetime('date_paid');
            $table->timestamps();
            $table->softDeletes();
            $table->index('date_paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_master');
    }
}
