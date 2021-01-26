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
    return view('portofolio');
});

Route::get('portofolio', 'PortofolioController@index')->name('portofolio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tes_api', 'HomeController@tes_api');
Route::post('/tes_api', 'HomeController@tes_api');

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('experience-for-negeri-ep', function () {
    return view('experience');
});

