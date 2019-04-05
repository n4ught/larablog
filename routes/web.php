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



Route::get('/', 'PagesController@index')->name('home');

Route::get('/admin', 'AdminsController@main')->name('admin');

// For user registration
Route::get('/admin/register', 'RegistrationController@create');

Route::post('/admin/register', 'RegistrationController@store');

Route::get('/admin/logout', 'SessionsController@destroy');

// Override the default login.
Route::get('/admin/login', function(){
  return view('admin.sessions.create');
})->name('login');

Route::get('/admin/{page}', 'AdminsController@index');

Route::get('/post/{post}', 'PostsController@show');

Route::get('/{page}', 'PagesController@page');




// Admin Post
Route::get('/admin/post/create', 'PostsController@create');

Route::post('/admin/post/create', 'PostsController@store');

Route::get('/admin/post/edit/{id}', 'PostsController@edit');

Route::post('/admin/post/edit/{id}', 'PostsController@update');

Route::get('/admin/post/delete/{id}', 'PostsController@destroy');

// Admin Category

Route::get('/admin/category/create', 'CategoriesController@create');

Route::post('/admin/category/create', 'CategoriesController@store');

Route::get('/admin/category/edit/{id}', 'CategoriesController@edit');

Route::post('/admin/category/edit/{id}', 'CategoriesController@update');

Route::get('/admin/category/delete/{id}', 'CategoriesController@destroy');







Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');






Route::get('/category/{slug}', 'CategoriesController@index');

Route::get('/user/edit/{id}', 'UsersController@edit');

Route::post('/user/edit/{id}', 'UsersController@update');




