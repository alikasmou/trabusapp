<?php

namespace Database\Seeders;

use App\Models\Line;
use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lines = array(
            array(
                "name"=> "Cevizlibağ - Beylikdüzü",
                "created_at"=> now()
            ),
            array(
                "name"=> "Taksim - Beylikdüzü",
                "created_at"=> now()
            ),
        );
        Line::insert($lines);
    }
}
