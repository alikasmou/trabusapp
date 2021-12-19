<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StartEndStationsTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('start_station_id')->nullable();
            $table->foreign('start_station_id')->references('id')->on('stations');
            // maybe user dont need to define the end station
            $table->unsignedBigInteger('end_station_id')->nullable();
            $table->foreign('end_station_id')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('start_station_id');
            $table->dropForeign('end_station_id');
            $table->dropColumn('start_station_id');
            $table->dropColumn('end_station_id');
        });
    }
}
