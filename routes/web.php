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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/search', 'SearchPageController@index')->name('search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //from original code

