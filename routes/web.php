<?php
// name  dathim@gmail.com   r33wrw3rw3r

use Illuminate\Support\Facades\Route;

//Auth::routes();
//Login
Route::get('cms/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('cms/login', 'Auth\LoginController@login');
Route::post('cms/logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('cms/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('cms/register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('cms/password/reset', 'Auth\ForgotPasswordController@showResetForm')->name('password.request');
Route::get('cms/password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('cms/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('cms/password/reset', 'Auth\ResetPasswordController@reset');

//Cms routing
Route::get('cms', 'CmsController@index')->name('cms');
Route::get('cms/page', 'PageController@index')->name('page');
Route::get('cms/design', 'DesignController@index')->name('design');
Route::get('cms/data', 'DataController@index')->name('data');
Route::get('cms/files', 'FilesController@index')->name('files'); 

 

//Site routing
Route::any('/', 'SiteController@index')->name('site');
Route::any('{br1}', 'SiteController@index')->name('site');
Route::any('{br1}/{br2}', 'SiteController@index')->name('site');
Route::any('{br1}/{br2}/{br3}', 'SiteController@index')->name('site');
Route::any('{br1}/{br2}/{br3}/{br4}', 'SiteController@index')->name('site');
Route::any('{br1}/{br2}/{br3}/{br4}/{br5}', 'SiteController@index')->name('site');
Route::any('{br1}/{br2}/{br3}/{br4}/{br5}/{br6}', 'SiteController@index')->name('site');

