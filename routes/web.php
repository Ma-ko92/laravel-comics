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
Route::get('/comic_details/{id}', function ($id) {

    // Richiamo l'array comics dal file php situato in config
    $comics = config('comics');

    // Creo un array e lo popolo con un foreach per ottenere l'id di ogni singolo fumetto
    $comic_details = [];
    foreach($comics as $comic) {
        // Verifico che l'id passato sia uguale e presente all' id di ogni singolo fumetto
        if($comic['id'] === (int)$id) {
            $comic_details = $comic;
        }
    }

    // Condizione che visualizza errore 404 in caso di inserimento di un id non presente nell'array
    if(empty($comic_details)) {
        abort('404');
    }

    $data = [
        'comic_details' => $comic_details
    ];

    return view('comic_details', $data);
})->name('comic_details');
