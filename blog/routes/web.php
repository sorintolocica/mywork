<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/lista-anime', 'PagesController@lista')->name('pages.lista-anime');
    Route::get('/staff', 'PagesController@staff')->name('pages.staff');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');
    Route::get('/autentificare', 'PagesController@autentificare')->name('pages.autentificare');
    Route::get('/inregistrare', 'PagesController@inregistrare')->name('pages.inregistrare');
    Route::get('/admin', 'PagesController@admin')->name('admin.home');
});
