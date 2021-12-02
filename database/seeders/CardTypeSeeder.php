<?php

namespace Database\Seeders;

use App\Models\CardType;
use Illuminate\Database\Seeder;

class CardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card_types = array(
            array(
                "name"=>"Istanbul Card",
                "created_at"=> now()
            ),
            array(
                "name"=>"Blue Card",
                "created_at"=> now()
            ),
            array(
                "name"=>"Electronic Card",
                "created_at"=> now()
            )
        );

        CardType::insert($card_types);
    }
}
