<?php

namespace Database\Seeders;

use App\Models\CardPrice;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CardPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $card_prices = array(
            array(
                "card_type_id" => 1,
                "price" => 10.00,
                "expiration_duration" => $now->addMonth(),
                "created_at" => now()
            ),
            array(
                "card_type_id" => 2,
                "price" => 350,
                "expiration_duration" => $now->addMonth(),
                "created_at" => now()
            ),
            array(
                "card_type_id" => 3,
                "price" => 175,
                "expiration_duration" => $now->addMonth(),
                "created_at" => now()
            ),
        );
        CardPrice::insert($card_prices);
    }
}
