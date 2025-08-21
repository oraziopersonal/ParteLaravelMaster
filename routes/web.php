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
    return view('welcome');
 }); 

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/provaController' , [MioController::class, 'index']);

Route::get('/servizi' , function () {
    return "<h1>Questa è la pagina servizi</h1>";
});

Route::resource("students", StudentsController::class);
//ROTTA DINAMICA CON PASSAGGIO DI PARAMETRI
// Route::get('/{utente?}', function ($utente="guest") {
//     return "<h1> Pagina utente $utente </h1>";
// });
