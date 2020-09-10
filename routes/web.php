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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PublicController@index');

Auth::routes();
Route::get('/example', function () {
    return view('example');
});
Route::get('/example', 'PubController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('campuses', 'CampusController');
Route::resource('bars', 'BarController');
Route::resource('snacks', 'SnackController');
Route::resource('menus', 'MenuController');
Route::resource('preferencias', 'PreferenciaController');
Route::resource('buzons', 'BuzonController');
Route::resource('reportes', 'ReporteController');