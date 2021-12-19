<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\ChargeMachine;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //activate card for user
        $card = Card::where('card_type_id',1)->first();
        $card->user_id =1;
        $card->status = 'active';

        // make 2 transaction (passing)
        $transactions = array(
        array(
                'transactionable_type' =>'App\\Models\\PassingMachine',
                'transactionable_id' => 1,
                'card_id' => $card->id,
                'amount' => 2,
                'stops' => null,
                'transfers' => null,
                'created_at' => Carbon::now()->subMinutes(5)
            ),
            array(
                'transactionable_type' =>'App\\Models\\PassingMachine',
                'transactionable_id' => 1,
                'card_id' => $card->id,
                'amount' => 2,
                'stops' => null,
                'transfers' => null,
                'created_at' => Carbon::now()->subMinutes(2)
            ),
        );
        DB::table('transactions')->insert($transactions);
        $transactions = array(
            array(
                'transactionable_type' => 'App\\Models\\ChargeMachine',
                'transactionable_id' => 1,
                'card_id' => $card->id,
                'amount' => 20,
                'stops' => null,
                'transfers' => null,
                'created_at' => Carbon::now()->subMinutes(120)
            ),
        );
        DB::table('transactions')->insert($transactions);
        $card->save();
    }
}
