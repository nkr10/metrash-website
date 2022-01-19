<?php

use App\Http\Controllers\SearchPageController;
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

Route::view('/', 'pages.index');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/search', 'pages.search');


Route::get('/search', 'SearchPageController@index')->name('search.index');
Route::get('/rent/{product}', 'SearchPageController@show')->name('search.show');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home'); //from original code

