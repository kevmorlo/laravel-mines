<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcessionController;
use App\Http\Controllers\MineController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome-template');
});


//Route::get('/', HomeController::class, "home");


Route::get('/concession/show/{id}', [ConcessionController::class, 'index']);

Route::get('/concession', [ConcessionController::class, 'showAll']);

Route::get('/mine/{id}', [MineController::class, 'index']);

Route::get('/concession/{id}/mine', [MineController::class, 'showAll']);

Route::get('/concession/create', [ConcessionController::class, 'showFormeCreate']);

Route::get('/concession/create/sucess', [ConcessionController::class, 'create']);