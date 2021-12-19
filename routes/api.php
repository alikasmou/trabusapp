<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\{
    User,
    Card
};
use App\Http\Controllers\{
    CardController
};
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
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

Route::post('metrobus-pass',[CardController::class,'metrobus']);
Route::post('bus-pass',[CardController::class,'bus']);
Route::post('refund',[CardController::class,'refund']);
Route::post('charging',[CardController::class,'charge']);


