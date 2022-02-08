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

Route::prefix('admin')->group(function() {
  // authenticating admin
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  Route::get('/', 'DashboardController@index')->name('admin.dashboard');
  Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

  Route::get('/manage', 'DashboardController@manage')->name('admin.manage');
  // Route::get('/anime/add', 'DashboardController@add')->name('new anime');
 }) ;

Auth::routes(['register' => false]);

Route::resource('admin/anime', 'AnimeController');
