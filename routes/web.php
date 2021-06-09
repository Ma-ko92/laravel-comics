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

// Route collegata alla homepage
Route::get('/', function () {

    // Richiamo l'array comics dal file php situato in config
    $comics = config('comics');

    // Creo un array associativo
    $data = [
        'comics' => $comics
    ];

    // dd($comics_array);
    
    return view('homepage', $data);
})->name('home');

// Route collegata alla pagina dettaglio di ogni singolo fumetto
Route::get('/comic_detail', function () {
    return view('comic_detail');
})->name('comic_detail');
