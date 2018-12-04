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

Auth::routes();

Route::get('dashboard/{any}', 'HomeController@index')->name('home');

Route::resource('NuevaBicicleta','NuevaBicicletasController',[
    'except' => ['edit','show','store']
]);

Route::post('formSubmit','nuevaBicicletaController@formSubmit');

Route::prefix('bicicleta')->group(function () {
    Route::post('/create', 'ModuloBicicleta\BicicletaController@store');
    Route::get('/list', 'ModuleBicicleta\BicicletaController@show')->name('bicicleta.list');
    //Route::get('/nuevo', 'ModuleBicicleta\BicicletaController@create');
});
