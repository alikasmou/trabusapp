<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "number" => $this->faker->uuid(),
            "user_id" => null,
            "balance" => 0,
            "status" => "disabled",
            "card_type_id" => rand(1,3),
            "created_at" => Carbon::now()
        ];
    }
}
