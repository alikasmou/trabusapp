<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    CardController
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function(){
    return view('new-card');
})->name('new-card');

Route::post('my-card',[CardController::class,'show'])->name('my-card');

// Route::get('user/card/{owner}',[UserController::class,'card'])->name('mycard');
