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
//pages
Route::get('cms/page', 'PageController@index')->name('page');
Route::get('cms/page/add/{id}', 'PageController@add')->name('page-add');
Route::post('cms/page/addsave', 'PageController@addsave')->name('page-add-save');
Route::get('cms/page/edit/{id}', 'PageController@edit')->name('page-edit');
Route::post('cms/page/editsave/{id}', 'PageController@editsave')->name('page-edit-save');
Route::get('cms/page/delete/{id}', 'PageController@delete')->name('page-delete'); 
Route::get('cms/page/settings/{id}', 'PageController@settings')->name('page-settings');
Route::post('cms/page/settings/save/{id}', 'PageController@settings_save')->name('page-settings-save');



//designs
Route::get('cms/design', 'DesignController@index')->name('design') ;
Route::get('cms/design/add', 'DesignController@add')->name('design-add') ;
Route::post('cms/design/add-save', 'DesignController@addsave')->name('design-add-save') ;
Route::get('cms/design/edit/{id}', 'DesignController@edit')->name('design-edit') ;
Route::post('cms/design/edit/{id}', 'DesignController@editsave')->name('design-edit-save') ;
Route::get('cms/design/delete/{id}', 'DesignController@delete')->name('design-delete') ;

//datas
Route::get('cms/data', 'DataController@index')->name('data');
Route::get('cms/data/add', 'DataController@add_table')->name('add-table');
Route::post('cms/data/add-save', 'DataController@add_table_save')->name('add-table-save'); 
Route::get('cms/data/brows/{id}', 'DataController@brows')->name('data-brows'); 





Route::get('cms/users', 'UsersController@index')->name('users'); 
Route::get('cms/user/edit/{id}', 'UsersController@edit')->name('user-edit') ;
Route::get('cms/user/add', 'UsersController@add')->name('user-add') ;
Route::post('cms/user/add-save', 'UsersController@addsave')->name('user-add-save') ;
Route::post('cms/user/edit/{id}', 'UsersController@editsave')->name('user-edit-save') ;
Route::get('cms/user/delete/{id}', 'UsersController@delete')->name('user-delete') ;

Route::view('/1', 'pomorye.welcome1');
Route::view('/2', 'pomorye.welcome2');
Route::view('/3', 'pomorye.welcome3');
Route::view('/4', 'pomorye.welcome4');
Route::view('/5', 'pomorye.welcome5');

Route::view('/m1', 'pomorye.moder1');
Route::view('/m2', 'pomorye.moder2');
Route::view('/m3', 'pomorye.moder3');



Route::view('prof', 'prof.main');
//Route::view('/5', 'welcome5');
/*
Route::any('/1', 'SiteController@index1')->name('site');
Route::any('/2', 'SiteController@index2')->name('site');
Route::any('/3', 'SiteController@index3')->name('site');
Route::any('/4', 'SiteController@index4')->name('site');
*/
//Site routing

Route::any('{any}', 'SiteController@index')->where('any', '.*');
