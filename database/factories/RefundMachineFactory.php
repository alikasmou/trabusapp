<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RefundMachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = array('instation','invehicle');
        return [
            "type" => $types[rand(0,1)],
            "amount" => 
        ];
    }
}
