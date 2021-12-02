<?php

namespace Database\Seeders;

use App\Models\CardType;
use Illuminate\Database\Seeder;
use App\Models\ChargeMachine;
use App\Models\Stock;
class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $machines = ChargeMachine::all();
        $cardsCount = CardType::count();
        foreach($machines as $machine){
            for($i = 1; $i <= $cardsCount; $i++){
                Stock::create([
                    "stockable_type" => CardType::class,
                    "stockable_id" => $i,
                    "charge_machine_id" => $machine['id'],
                    "stock" => 10
                ]);
            }
        }
    }
}
