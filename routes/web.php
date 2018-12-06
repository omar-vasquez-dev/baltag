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

Route::post('formSubmit','nuevaBicicletaController@formSubmit');

Route::prefix('bicicleta')->group(function () {
    Route::post('/create', 'ModuleBicicleta\BicicletaController@store');
    Route::get('/list', 'ModuleBicicleta\BicicletaController@show')->name('bicicleta.list');
    //Route::get('/nuevo', 'ModuleBicicleta\BicicletaController@create');
});

/* --- --- --- Controlador de Producto --- --- --- */
Route::prefix('producto')->group(function(){
    Route::post('/create','ModuleProducto\ProductoController@store');
    Route::get('/list','ModuleProducto\ProductoController@show')->name('producto.list');
});

Route::prefix('marca')->group(function(){
    Route::post('/create','ModuleProducto\MarcaController@store');
    Route::get('/list','ModuleProducto\MarcaController@show')->name('marca.list');
});

Route::prefix('componente')->group(function(){
    Route::post('/create','ModuleProducto\ComponenteController@store');
    Route::get('/list','ModuleProducto\ComponenteController@show')->name('componente.list');
});

Route::prefix('medidas')->group(function(){
    Route::post('/create','ModuleProducto\MedidasController@store');
    Route::get('/list','ModuleProducto\MedidasController@show')->name('medidas.list');
});

Route::prefix('material')->group(function(){
    Route::post('/create','ModuleProducto\MaterialController@store');
    Route::get('/list','ModuleProducto\MaterialController@show')->name('material.list');
});

Route::prefix('modalidad')->group(function(){
    Route::post('/create','ModuleProducto\ModalidadController@store');
    Route::get('/list','ModuleProducto\ModalidadController@show')->name('modalidad.list');
});