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
Route::get('/hello',function(){
 return 'Hello World!';
});
Route::get('list',
'App\Http\Controllers\CVController@list')->name('list_CV');
Route::get('show/{id}', 'App\Http\Controllers\CVController@show');
