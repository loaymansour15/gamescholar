<?php

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

//Route::get('/home', 'HomeController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/recommendedgames', 'RecommendedGamesController@index')->name('recommendedgames');

Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminController@login');
/*Route::post('/admin-password/email', 'Admin/ForgetPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin/ForgetPasswordController@showLinkResetForm')->name('admin.password.reset');
Route::post('admin-password/reset', 'Admin/ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin/ResetPasswordController@showResetForm')->name('admin.password.reset');*/