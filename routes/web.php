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

Route::get('/', 'PizzaController@index');
Route::get('/home', 'PizzaController@index');

Auth::routes();

Route::prefix('/app')->group(function () {
    Route::resource('/home', 'PizzaController');
});

Route::get('/app/delete/cart/{id}', 'PizzaController@deleteCart');