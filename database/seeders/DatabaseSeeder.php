<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\{
    Card,
    ChargeMachine,
    User
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CardTypeSeeder::class,
            CardPriceSeeder::class,
            ClientTypeSeeder::class,
            LineSeeder::class,
            VehicleSeeder::class,
            StationSeeder::class,
        ]);
        ChargeMachine::factory(30)->create();
        $this->call([StockSeeder::class]);
        User::factory(1000)->create();
        Card::factory(200)->create();
        $this->call([PassingMachineSeeder::class]);
    }
}
