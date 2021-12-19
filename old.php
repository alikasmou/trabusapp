<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\{
    Card,
    ChargeMachine,
    PassingMachine,
    Price,
    Station,
    Transaction,
    RefundMachine,
    User
};
use Illuminate\Http\JsonResponse;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user_card = User::where('username',$request->username)
        ->with('card','type')->firstOrFail();
        return view('my-card')->with('user_card',$user_card);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }

    public function metrobus(Request $request) : JsonResponse{

        try{
            // find the card number according to the request that comes from the frontend
            $card_owner = Card::where('status','active')->where('number', $request->card)->firstOrFail();
            // find the station according to the request that comes from the frontend
            $station = Station::findOrFail($request->station);
            // find the card type name
            $card_type = $card_owner->cardType->name;
            // find the price according to the card type and vehicle type and client type
            $price = Price::where('vehicle_id',$station->stationable->id)
                    ->where('card_type_id',$card_owner->cardType->id)
                    ->where('client_type_id',$card_owner->user->type->id)
                    ->orderBy('amount','desc')
                    ->FirstOrFail();
                    // return response()->json($price,200);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }
        try{
            $passing = PassingMachine::where('passingable_id',$station->stationable->id)->first();
            $transaction = new Transaction();
            if($card_owner->balance >= $price->amount){
                // dd($card_owner->balance , $price->amount);



                $transaction->card_id = $card_owner->id;
                $transaction->amount = $price->amount;
                $transaction->start_station_id = $station->id;
                $passing->transactions()->save($transaction);
                return response()->json([
                    'msg'=> 'Welcome ' . $card_owner->user->fullname . '!',
                    'card_type'=>$card_type,
                    'client_type'=>$card_owner->user->type->name,
                    'price'=>$price->amount,
                    'balance'=>$card_owner->balance
                ],200);
                // dd($card_owner->balance -$price->amount);
            }else{
                return response()->json([
                    'msg'=>$card_owner->user->fullname.'! insufficient balance',
                    'balance'=>$card_owner->balance,
                    'stops' => $stops ?? 0,
                    'price'=>$price->amount
                ],200);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],200);
        }
        $data = [
            "time" => Carbon::now()->subMinutes(60),
            "owner" => $card_owner->user->fullname,
            "client_type_id"=>$card_owner->user->type->id,
            "card_type" => $card_type,
            "vehicle_type" => $station->stationable->type,
            "vehicle_no" => $station->stationable->name,
            "station" => $station->name,
            "price" =>$price->amount,
            "card_balance" => $card_owner->balance,
            "transfers" => $transfers ?? 0,
        ];
        return response()->json($data,200);
    }

    public function bus(Request $request) : JsonResponse{
        try{
            $card_owner = Card::where('number', $request->card)->firstOrFail();
            $station = Station::findOrFail($request->station);
            $card_type = $card_owner->cardType->name;
            $card_type_id=$card_owner->cardType->id;
            $transfers = Transaction::where('card_id', $card_owner->id)
                        ->whereBetween('created_at',[Carbon::now()->subMinutes(15),Carbon::now()])
                        ->where('transactionable_type', PassingMachine::class)
                        ->count();
            // if transfers bigger than 3 so use the same price
            $max_transfers = Price::where('vehicle_id',$station->stationable->id)->max('transfers');
            $transfers= ($transfers > $max_transfers) ? $max_transfers : $transfers;
            $price = Price::where('vehicle_id',$station->stationable->id)
                    ->where('card_type_id',$card_type_id)
                    ->where('client_type_id',$card_owner->user->type->id)
                    ->where('transfers',$transfers)
                    ->orderBy('amount','asc')
                    ->firstOrFail();
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }
        try{
            $passing = PassingMachine::where('passingable_id',$station->stationable->id)->first();
            $transaction = new Transaction();
            if($card_owner->balance >= $price->amount){
                // dd($card_owner->balance , $price->amount);
                $transaction->card_id = $card_owner->id;
                $transaction->amount = $price->amount;
                $transaction->start_station_id = $station->id;
                $transaction->is_refunded = true;
                $passing->transactions()->save($transaction);
                return response()->json([
                    'transfer'=>$transfers,
                    'data' => $price,
                    'msg'=> 'Welcome ' . $card_owner->user->fullname . '!',
                    'card_type' => $card_type,
                    'client_type'=> $card_owner->user->type->name,
                    'vehicle_type' => $station->stationable->type,
                    'price'=>$price->amount,
                    'balance'=>$card_owner->balance
                ],200);
                // dd($card_owner->balance -$price->amount);
            }else{
                return response()->json([
                    'msg'=>$card_owner->user->fullname.'! insufficient balance',
                    'balance'=>$card_owner->balance,
                    'transfers' => $transfers,
                    'price'=>$price->amount
                ],200);
            }
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],200);
        }
        $data = [
            "time" => Carbon::now()->subMinutes(60),
            "owner" => $card_owner->user->fullname,
            "client_type_id"=>$card_owner->user->type->id,
            "card_type" => $card_type,
            "vehicle_type" => $station->stationable->type,
            "vehicle_no" => $station->stationable->name,
            "station" => $station->name,
            "price" =>$price->amount,
            "card_balance" => $card_owner->balance,
            "transfers" => $transfers ?? 0,
        ];
        return response()->json($data,200);
    }


    public function charge(Request $request) : JsonResponse{
        // dd($request->all());
        $card_owner = Card::where('number', $request->card)->first();
        // dd($card_owner);
        $station = Station::find($request->station);
        $card_type = $card_owner->cardType->name;
        $money = $request->money;
        $balance =$card_owner->balance;
        $machine = ChargeMachine::find($request->machine);
        $transaction = new Transaction();
        $transaction->card_id = $card_owner->id;
        $transaction->amount = $money;
        $machine->transactions()->save($transaction);
        $data = [
            "owner" => $card_owner->user->fullname,
            "card_type" => $card_type,
            "money" => $money,
            "card_balance" => $balance + $money,
            "machine" => $machine->code
        ];
        return response()->json($data,200);
    }

    public function refund(Request $request) : JsonResponse{
        //get card object
        $card = Card::where('number', $request->card)->first();
        $refund_station = RefundMachine::where('station_id',$request->end_station_id)->first();
        //find the last transaction for the requested card
        try{

            $last_transaction = Transaction::where('card_id',$card->id)
            ->where('transactionable_type',PassingMachine::class)
            ->where('is_refunded',false)
            ->where('created_at','>',Carbon::now()->subMinutes(30))
            ->with('station.stationable')
            ->with('transactionable')
            ->orderBy('id','desc')
            ->firstOrFail();
        }catch(\Exception $e){
            return response()->json(['msg'=>$card->user->fullname."! "."no transaction to be refund",'balance' => $card->balance,],200);
        }
        if($last_transaction->station->stationable->type != 'metrobus' || $last_transaction == null){
            return response()->json(['msg'=>'invalid transaction'],200);
            return response()->json([
                'msg'=>'No transaction to be refund',
                'price_of_the_trip' => $last_transaction->amount,
                'balance' => $card->balance,
                'refund_amount' => 0,
            ],200);
        }
        //get the start station and the amount
        $start_station = $last_transaction->start_station_id;
        $amount = $last_transaction->amount;
        $stops= $refund_station->station_id - $last_transaction->start_station_id;
        $stops = ($stops<0) ? $stops*-1 : $stops;
        $max_stops = Price::where('vehicle_id',$last_transaction->station->stationable->id)->max('stops');
        $stops = ($stops > $max_stops) ? $max_stops : $stops;
        //make transaction for refund
        $price_of_the_trip = Price::where('vehicle_id',$last_transaction->station->stationable->id)
                    ->where('card_type_id',$card->cardType->id)
                    ->where('client_type_id',$card->user->type->id)
                    ->where('stops','>=',$stops)
                    ->orderBy('amount','asc')
                    ->firstOrFail();
        $refund_amount = round($last_transaction->amount - $price_of_the_trip->amount,2);
        $transaction = new Transaction();
        $transaction->card_id = $card->id;
        $transaction->amount = $refund_amount;
        $transaction->stops = $stops;
        $transaction->start_station_id = $start_station;
        $transaction->end_station_id = $refund_station->station_id;
        $refund_station->transactions()->save($transaction);
        $last_transaction->is_refunded = true;
        $last_transaction->save();
        $data = [
            'card_type_id' => $card->cardType->id,
            'vehicle_id' => $last_transaction->station->stationable->id,
            'client_type_id' => $card->user->type->id,
            'stops_count' => $stops,
            'card' => $card->number,
            'balance' => $card->balance,
            'refund_station' => $refund_station->station_id,
            'start_station' => $last_transaction->start_station_id,
            'last_transaction_amount' => $last_transaction->amount,
            'passingMachineType' => $last_transaction->transactionable->type,
            'vehicle_type' => $last_transaction->station->stationable->type,
            'price_of_the_trip' =>$price_of_the_trip->amount,
            'refund_amount' => round($last_transaction->amount - $price_of_the_trip->amount,2)
        ];
        return response()->json($data,200);
    }

}
