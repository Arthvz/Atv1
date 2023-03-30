<?php

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

Route::get('/hello/{name}', function (String $name) {
    return view('hello', ['name' => $name]);
})->where('name', '^[A-Z][a-z]{2,}$');

Route::get('/conta/{x}/{y}/{operacao?}', function (int $x , int $y, String $operacao = null){
    switch($operacao){
        case null:
    
            $adicao = $x + $y;
            
            $subtracao = $x - $y;
            
            $divisao = $x / $y;
            
            $multiplicacao = $x * $y;
            
            echo "Adição :" . $adicao.'<br>'
            
            . "Subtração :" . $subtracao.'<br>'
            
            . "Divisão :"  . $divisao.'<br>'
            
            . "Multiplicação :" . $multiplicacao.'<br>';
            
            break;
    
        case 'soma';
    
            $resultado = $x + $y;
            
            echo $resultado;
    
        case 'subtração';
        
            $resultado = $x - $y;
            
            echo $resultado;
            
            break;
            
            case 'divisao';
            
            $resultado = $x / $y;
            
            echo $resultado;
            
            break;
        
        case 'multiplicacao';
        
            $resultado = $x * $y;
            
            echo $resultado;
            
            break;
            
            default;
            
            echo 'operação invalida';
            
    };
    
})  ->where ('x', '[0-9]+') 
    ->where('y', '[0-9]+');

Route::get('/idade/{year}/{month?}/{day?}', function (int $year, int $month = null, int $day = null) {
       $today = new DateTime(date('Y-m-d h:i:s'));
       $userBirthday = new DateTime(DateTimeImmutable::createFromFormat("Y-m-d", $year.$month.$day));
    
       return view('idade', ['year' => $year, 'month' => $month, 'day' => $day, 'today' => $today, 'userBirthday' => $userBirthday]);
    })  ->where('year','[0-9]{4}') 
        ->where('month', '[0-9]{1,2}?')
        ->where('day', '[0-9]{1,2}?');