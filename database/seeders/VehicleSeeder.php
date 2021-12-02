<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = array(
            array(
                "name" => "34C",
                "type" => "metrobus",
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "name" => "145T",
                "type" => "bus",
                "created_at" => now(),
                "line_id" => 2
            ),
        );
        Vehicle::insert($vehicles);
    }
}
