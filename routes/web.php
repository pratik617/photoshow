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

Route::get('/', 'AlbumsController@index');
Route::get('/albums', 'AlbumsController@index')->name('albums.index');
Route::get('/albums/create', 'AlbumsController@create')->name('albums.create');
Route::post('/albums/store', 'AlbumsController@store')->name('albums.store');
Route::get('/albums/{id}', 'AlbumsController@show')->name('albums.show');

Route::get('/photos/create/{id}', 'PhotosController@create')->name('photos.create');
Route::post('/photos/store', 'PhotosController@store')->name('photos.store');
