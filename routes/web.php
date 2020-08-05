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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

route::get('/', 'HomeController@index');
//form
route::get('/register', 'AuthController@form');
route::post('/selamatdatang', 'AuthController@selamatdatang');

route::get('/master', function(){
    return view ('adminlte.master');
});
route::get('/items', function(){
    return view('items.index');
});
route::get('/', function(){
    return view('items.page');
});
route::get('/data-table', function(){
    return view('items.data-table');
});