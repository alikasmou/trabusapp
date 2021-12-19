<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = array(
            //regular istanbul card
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 1,
                'transfers' => 0,
                'amount' => 2.6,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 1,
                'transfers' => 1,
                'amount' => 1.85,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 1,
                'transfers' => 2,
                'amount' => 1.40,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 1,
                'transfers' => 3,
                'amount' => 0.90,
            ),
            //student istanbul card
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 1,
                'transfers' => 0,
                'amount' => 1.25,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 1,
                'transfers' => 1,
                'amount' => 0.55,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 1,
                'transfers' => 2,
                'amount' => 0.50,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 1,
                'transfers' => 3,
                'amount' => 0.45,
            ),
            // teachers istanbul card
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 1,
                'transfers' => 0,
                'amount' => 1.85,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 1,
                'transfers' => 1,
                'amount' => 1.10,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 1,
                'transfers' => 2,
                'amount' => 0.85,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 1,
                'transfers' => 3,
                'amount' => 0.55,
            ),
            // all blue cards
            array(
                'vehicle_id'=>2,
                'card_type_id' => 2,
                'client_type_id' => 1,
                'stops' => 1,
                'transfers' => 5,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 2,
                'client_type_id' => 2,
                'stops' => 1,
                'transfers' => 5,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 2,
                'client_type_id' => 3,
                'stops' => 1,
                'transfers' => 5,
                'amount' => 1,
            ),
            // all electronic cards
            array(
                'vehicle_id'=>2,
                'card_type_id' => 3,
                'client_type_id' => 1,
                'stops' => 1,
                'transfers' => 5,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 3,
                'client_type_id' => 2,
                'stops' => 1,
                'transfers' => 5,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>2,
                'card_type_id' => 3,
                'client_type_id' => 3,
                'stops' => 1,
                'transfers' => 5,
                'amount' => 1,
            ),
        );
        $metrobus = array(
            //regular istanbul card
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1.95,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 9,
                'transfers' => 0,
                'amount' => 3,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 15,
                'transfers' => 0,
                'amount' => 3.25,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 21,
                'transfers' => 0,
                'amount' => 3.40,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 27,
                'transfers' => 0,
                'amount' => 3.50,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 33,
                'transfers' => 0,
                'amount' => 3.60,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 3,
                'stops' => 34,
                'transfers' => 0,
                'amount' => 3.85,
            ),
            //student istanbul card
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1.10,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 9,
                'transfers' => 0,
                'amount' => 1.20,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 1,
                'stops' => 10,
                'transfers' => 0,
                'amount' => 1.25,
            ),
            // teachers istanbul card
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1.45,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 9,
                'transfers' => 0,
                'amount' => 1.85,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 15,
                'transfers' => 0,
                'amount' => 1.9,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 27,
                'transfers' => 0,
                'amount' => 2.00,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 1,
                'client_type_id' => 2,
                'stops' => 28,
                'transfers' => 0,
                'amount' => 2.10,
            ),
            // all blue cards
            array(
                'vehicle_id'=>1,
                'card_type_id' => 2,
                'client_type_id' => 1,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 2,
                'client_type_id' => 2,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 2,
                'client_type_id' => 3,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 2,
                'client_type_id' => 1,
                'stops' => 4,
                'transfers' => 0,
                'amount' => 2,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 2,
                'client_type_id' => 2,
                'stops' => 4,
                'transfers' => 0,
                'amount' => 2,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 2,
                'client_type_id' => 3,
                'stops' => 4,
                'transfers' => 0,
                'amount' => 2,
            ),
            // all electronic cards
            array(
                'vehicle_id'=>1,
                'card_type_id' => 3,
                'client_type_id' => 1,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 3,
                'client_type_id' => 2,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 3,
                'client_type_id' => 3,
                'stops' => 3,
                'transfers' => 0,
                'amount' => 1,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 3,
                'client_type_id' => 1,
                'stops' => 4,
                'transfers' => 0,
                'amount' => 2,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 3,
                'client_type_id' => 2,
                'stops' => 4,
                'transfers' => 0,
                'amount' => 2,
            ),
            array(
                'vehicle_id'=>1,
                'card_type_id' => 3,
                'client_type_id' => 3,
                'stops' => 4,
                'transfers' => 0,
                'amount' => 2,
            ),
        );
        DB::table('prices')->insert($bus);
        DB::table('prices')->insert($metrobus);
    }
}
// '1', '34C', 'metrobus', '2021-12-10 16:08:50', NULL, '1'
// '2', '145T', 'bus', '2021-12-10 16:08:50', NULL, '2'
// '1', 'Istanbul Card', '2021-12-10 16:08:50', NULL
// '2', 'Blue Card', '2021-12-10 16:08:50', NULL
// '3', 'Electronic Card', '2021-12-10 16:08:50', NULL
// '1', 'student', '2021-12-10 16:08:50', NULL
// '2', 'teacher', '2021-12-10 16:08:50', NULL
// '3', 'regular', '2021-12-10 16:08:50', NULL




// id
// bigint UN AI PK
// vehicle_id
// bigint UN
// card_type_id
// bigint UN
// client_type_id
// bigint UN
// stops
// tinyint
// transfers
// tinyint
// amount
// double
// created_at
// timestamp
// updated_at
// timestamp
