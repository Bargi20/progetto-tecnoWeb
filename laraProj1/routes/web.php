<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController; //alcune rotte utilizzano i controle che contengolo le azioni

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
Route::get('/ListaDottori/Dottore/{numero}', [PublicController::class, 'showdottori'])
        ->name('prova'); //il suo nome
//definisce cosa fare quando arriva una richiesta in http una richiesta quando viene cercata la home

 //utilizziamo il metodo view cosi che mi consente di attivare un meccanismo diretto per non passare alla funzione di un controller WORKFLOW
Route::view('/', 'home') //essendo che le pagine sono statiche non bisogna che gli passiamo nessun controller
        ->name('home');

Route::view('/ListaDottori', 'Lista_dottori')
        ->name('Listadottori');
//due rotte che ci gestiscono una vista

Route::view('/Faq', 'Faq')
        ->name('Faq');
//due rotte che ci gestiscono un


