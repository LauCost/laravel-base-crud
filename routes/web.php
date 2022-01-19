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

    return view('home');
})->name('home');

Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');

Route::get('/admin/comics', 'Admin\ComicAdminController@index')->name('admin.comics.index');
Route::get('/admin/comics/create', 'Admin\ComicAdminController@create')->name('admin.comics.create');
Route::post('/admin/comics', 'Admin\ComicAdminController@store')->name('admin.comics.store');
Route::get('/admin/comics/{comic}', 'Admin\ComicAdminController@show')->name('admin.comics.show');
Route::get('/admin/comics/{comic}/edit', 'Admin\ComicAdminController@edit')->name('admin.comics.edit');
Route::put('/admin/comics/{comic}', 'Admin\ComicAdminController@update')->name('admin.comics.update');
Route::delete('/admin/comics/{comic}', 'Admin\ComicAdminController@destroy')->name('admin.comics.destroy');
