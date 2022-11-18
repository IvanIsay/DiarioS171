<?php

use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorBD;


//Rutas para Resource

//Create
Route::get('recuerdo/create', [ControladorBD::class, 'create'])->name('recuerdo.create');

//Store
Route::post('recuerdo', [ControladorBD::class, 'store'])->name('recuerdo.store');

//Index
Route::get('recuerdo', [ControladorBD::class, 'index'])->name('recuerdo.index');









Route::get('/', function () {
    return view('welcome');
});

// Rutas Individuales para controlador
Route::get('Home',[ControladorVistas::class, 'showHome'])->name('casa');






//Request por POST
























/*
// rutas agrupadas tipo controlador
Route::controller(controladorVistas::class)->group(
   function (){

    Route::get('Home', 'showHome')->name('casa');
    Route::get('Ingresar',  'showIngresar')->name('in');
    Route::get('Recuerdos', 'showRecuerdos')->name('rec');

   });

   */