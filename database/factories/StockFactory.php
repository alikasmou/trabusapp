<?php

namespace Database\Factories;

use App\Models\CardType;
use App\Models\ChargeMachine;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "stockable_type" => CardType::class,
            "stockable_id" => CardType::all()->random()->id,
            "charge_machine_id" => ChargeMachine::all()->random()->id,
            "stock" => 10
        ];
    }
}
