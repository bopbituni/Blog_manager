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


use Illuminate\Support\Facades\Route;

Route::post("index", "testController@display");
Auth::routes();


Route::group(['middleware' => 'locale'], function() {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/blogs', 'BlogController@index')->name('blogs.list');
    Route::get('/blogs/create', 'BlogController@create')->name('blogs.create');
    Route::post('/blogs/create', 'BlogController@store')->name('blogs.store');
    Route::get('/blogs/update/{id}', 'BlogController@edit')->name('blogs.edit');
    Route::post('/blogs/update/{id}', 'BlogController@update')->name('blogs.update');
    Route::get('/blogs/delete/{id}', "BlogController@delete")->name('blogs.delete');
    Route::post('/change-language', 'LanguageController@changeLang')->name('user.change-language');
});