<?php
//use Illuminate\Support\Facades\Route;
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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;

Route::get('/', 'HomeController@index');
//form
Route::get('/register', 'AuthController@form');
Route::post('/selamatdatang', 'AuthController@selamatdatang');

Route::get('/master', function(){
    return view ('adminlte.master');
});
Route::get('/items', function(){
    return view('items.index');
});
Route::get('/', function(){
    return view('items.page');
});
Route::get('/data-table', function(){
    return view('items.data-table');
});

Route::get('/', function(){
    return view('welcome');
});

Route::get('/pertanyaan/create' , 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');

Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');

Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');

Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');