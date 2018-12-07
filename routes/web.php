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
    Route::post('/destroy','ModuleProducto\ProductoController@destroy');
});

Route::prefix('marca')->group(function(){
    Route::post('/create','ModuleProducto\MarcaController@store');
    Route::get('/list','ModuleProducto\MarcaController@show')->name('marca.list');
    Route::post('/destroy','ModuleProducto\MarcaController@destroy');   
});

Route::prefix('componente')->group(function(){
    Route::post('/create','ModuleProducto\ComponenteController@store');
    Route::get('/list','ModuleProducto\ComponenteController@show')->name('componente.list');
    Route::post('/destroy','ModuleProducto\ComponenteController@destroy');
});

Route::prefix('medidas')->group(function(){
    Route::post('/create','ModuleBicicleta\MedidasController@store');
    Route::get('/list','ModuleBicicleta\MedidasController@show')->name('medidas.list');
    Route::post('/destroy','ModuleBicicleta\MedidasController@destroy');
});

Route::prefix('material')->group(function(){
    Route::post('/create','ModuleBicicleta\MaterialController@store');
    Route::get('/list','ModuleBicicleta\MaterialController@show')->name('material.list');
    Route::post('/destroy','ModuleBicicleta\MaterialController@destroy');
});

Route::prefix('modalidad')->group(function(){
    Route::post('/create','ModuleBicicleta\ModalidadController@store');
    Route::get('/list','ModuleBicicleta\ModalidadController@show')->name('modalidad.list');
    Route::post('/destroy','ModuleBicicleta\ModalidadController@destroy');
});