<?php

use Illuminate\Support\Facades\Route;

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

    //Usiamo 'config' per collegarci direttamente alla cartella omonima
    $data = config('comics');

    return view('home', ["comics" => $data ]);
});

//Creo una rotta per visualizzare il dettaglio
Route::get('/detail', function () {

    
    $data = config('comics');
    
    return view('detail', ["comic" => $data[0] ]);
});
