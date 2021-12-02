<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->morphs('transactionable');
            $table->foreignId('card_id')->constrained();
            $table->double('amount');
            $table->tinyInteger('stops')->nullable();
            //if user has a transaction end with transfer true station within 25min when cardtype is istanbulcard
            $table->tinyInteger('transfers')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->timestamps();
            $table->index(['transactionable_type','card_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
