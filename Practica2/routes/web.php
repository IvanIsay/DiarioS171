<?php

use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;



/** ===  Rutas Tipo VIEW  ===
Route::view('/','welcome');

Route::view('Home','home')->name('casa');
Route::view('Ingresar','ingresar')->name('in');
Route::view('Recuerdos','recuerdos')->name('rec');
**/




Route::get('/', function () {
    return view('welcome');
});

// Rutas Individuales para controlador
Route::get('Home',[ControladorVistas::class, 'showHome'])->name('casa');

Route::get('Ingresar', [ControladorVistas::class, 'showIngresar'])->name('in');

Route::get('Recuerdos', [ControladorVistas::class, 'showRecuerdos'])->name('rec');


//Request por POST
Route::post('guardarRecuerdo', [ControladorVistas::class, 'procesarRecuerdo'])->name('SaveMem');























/*
// rutas agrupadas tipo controlador
Route::controller(controladorVistas::class)->group(
   function (){

    Route::get('Home', 'showHome')->name('casa');
    Route::get('Ingresar',  'showIngresar')->name('in');
    Route::get('Recuerdos', 'showRecuerdos')->name('rec');

   });

   */