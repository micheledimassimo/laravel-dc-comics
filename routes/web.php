<?php

use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Log;

Route::resource('comics', ComicController::class);

Route::get('/',[ComicController::class, 'index']);

Route::get('/', function () {
    

    

    return view('welcome', [
        
    ]);
    
});



// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
