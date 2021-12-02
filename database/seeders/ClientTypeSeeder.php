<?php

namespace Database\Seeders;

use App\Models\ClientType;
use Illuminate\Database\Seeder;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client_types = array(
            array(
                "name"=> "student",
                "created_at" => now()
            ),
            array(
                "name"=> "teacher",
                "created_at" => now()
            ),
            array(
                "name"=> "regular",
                "created_at" => now()
            ),
        );
        ClientType::insert($client_types);
    }
}
