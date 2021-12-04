<?php

namespace Database\Seeders;

use App\Models\{
    PassingMachine,
    Station,
    Vehicle,
    RefundMachine
};
use Illuminate\Database\Seeder;

class PassingMachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MAKE FOR EACH BUS A PASSING MACHINE

        //1- get all the vehicles where type is bus = 2
        $buses = Vehicle::where('type','bus')->get()->pluck('id');
        $metrobus_stations = Station::where('stationable_type','App\Models\Vehicle')->where('stationable_id',1)->get()->pluck('id');

        //2- assign for each bus a passing machine
        foreach($buses as $bus){

            PassingMachine::create([
                "type" => "invehicle",
                "passingable_type" => "App\Models\Vehicle",
                "passingable_id" => $bus
            ]);

        }

        //3- assign for each station a passing machine and refund machine
        foreach($metrobus_stations as $station){
            // add passing machine
            PassingMachine::create([
                "type" => "instation",
                "passingable_type" => "App\Models\Station",
                "passingable_id" => $station
            ]);

            // add refund machine
            RefundMachine::create([
                "station_id" => $station
            ]);
        }
    }
}
