<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/tokens/create', [UserController::class,'login']);

Route::post('/passing',function(){
    // $request->
});

Route::get('/test',function(){
    return App\Models\Station::where('stationable_type','App\Models\Vehicle')->where('stationable_id',2)->get()->pluck('id');
});
