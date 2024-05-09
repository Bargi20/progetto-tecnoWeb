<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController; //alcune rotte utilizzano i controller che contengolo le azioni

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
//la rotta è caratterizzata dal verbo con la quale viene inviata dalla rotta stessa e quindi tutto il pattern della
Route::get('/', [PublicController::class, 'showCatalog1'])
        ->name('catalog1'); //il suo nome
//definisce cosa fare quando arriva una richiesta in http una richiesta quando viene cercata la home

//definiamo la rotta per quando l'utente clicca nella categoria top, visto che non sappiamo che valore avrà l'id
//che l'utente cliccherà è una rotta che laravel mappera e manderà la richiesta con il valore memorizzato e verrà passato al controllore pubblico
Route::get('/selTopCat/{topCatId}', [PublicController::class, 'showCatalog2'])
        ->name('catalog2');


Route::get('/selTopCat/{topCatId}/selCat/{catId}', [PublicController::class, 'showCatalog3'])
        ->name('catalog3');//tre rotte dinamiche

 //utilizziamo il metodo view cosi che mi consente di attivare un meccanismo diretto per non passare alla funzione di un controller WORKFLOW
Route::view('/where', 'where') //essendo che le pagine sono statiche non bisogna che gli passiamo nessun controller
        ->name('where');

Route::view('/who', 'who')
        ->name('who');
//due rotte che ci gestiscono una vista
