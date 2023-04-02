<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\CalculoController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/hello/{name}', [NameController::class, 'name']
)->where('name', '^[A-Z][a-z]{2,}$');

Route::get('/conta/{x}/{y}/{operacao?}', [CalculoController::class, 'conta']
)   ->where ('x', '[0-9]+') 
    ->where('y', '[0-9]+');

Route::get('/idade/{year}/{month?}/{day?}', [AgeController::class, 'age']
)  ->where('year','[0-9]{4}') 
    ->where('month', '[0-9]{1,2}?')
    ->where('day', '[0-9]{1,2}?');