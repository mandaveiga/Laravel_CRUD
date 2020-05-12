<?php

use App\Http\Controllers\bookController;
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

Route::get('/books', 'bookController@index');
Route::get('books/create', 'bookController@create');
Route::get('/books/{id}/edit', 'bookController@edit');
Route::get('/books/{id}/del', 'bookController@destroy');
Route::put('/books/{id}', 'bookController@update');
Route::get('/books/{id}', 'bookController@show');
Route::post('/books', 'bookController@store');

Route::post('/autor', 'autorController@store');
Route::get('autor/create', 'autorController@create');
Route::get('autor/delete/{id}', 'autorController@destroy');
