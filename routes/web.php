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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index')->name('home');
Route::get('/anime', 'PagesController@anime')->name('anime');
Route::get('/anime/{id}', 'PagesController@display')->name('display');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/admin/manage', 'DashboardController@manage')->name('manage');
// Route::get('/admin/anime/add', 'DashboardController@add')->name('new anime');

Auth::routes(['register' => false]);

Route::resource('admin/anime', 'AnimeController');
