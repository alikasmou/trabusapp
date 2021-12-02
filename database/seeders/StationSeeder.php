<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $station = array(
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Cevizlibağ"),
                "order_in_line" => 1,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Merter"),
                "order_in_line" => 2,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Zeytinburnu"),
                "order_in_line" => 3,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("İncirli"),
                "order_in_line" => 4,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Bahçelievler"),
                "order_in_line" => 5,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Şirinevler"),
                "order_in_line" => 6,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Yenibosna"),
                "order_in_line" => 7,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Sefaköy"),
                "order_in_line" => 8,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Beşyol"),
                "order_in_line" => 9,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Florya"),
                "order_in_line" => 10,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Cennet Mah"),
                "order_in_line" => 11,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Küçükçekmece"),
                "order_in_line" => 12,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("İBB Social Facilities"),
                "order_in_line" => 13,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Şükrübey"),
                "order_in_line" => 14,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Avcılar Campus"),
                "order_in_line" => 15,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Mustafa Kemal Paşa"),
                "order_in_line" => 16,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Haramidere Sanayi"),
                "order_in_line" => 17,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Beylikdüzü Municipality"),
                "order_in_line" => 18,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Cumhuriyet Mah"),
                "order_in_line" => 19,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 1,
                "name" => Str::lower("Beylikdüzü Last Station"),
                "order_in_line" => 20,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 1
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("Gümüşsuyu Peron"),
                "order_in_line" => 1,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("Taksim Tünel"),
                "order_in_line" => 2,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("TEPEBAŞI"),
                "order_in_line" => 3,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("Şişhane"),
                "order_in_line" => 4,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("UNKAPANI"),
                "order_in_line" => 5,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("Fatih"),
                "order_in_line" => 6,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("YUSUFPAŞA"),
                "order_in_line" => 7,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("FINDIKZADE"),
                "order_in_line" => 8,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("MİLLET CADDESİ"),
                "order_in_line" => 9,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("GÜZELYURT"),
                "order_in_line" => 10,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
            array(
                "stationable_type" => Vehicle::class,
                "stationable_id" => 2,
                "name" => Str::lower("BİZİMKENT"),
                "order_in_line" => 11,
                "is_transfer" => true,
                "created_at" => now(),
                "line_id" => 2
            ),
        );

        Station::insert($station);
    }
}
