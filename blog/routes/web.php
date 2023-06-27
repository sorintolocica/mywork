<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\EpisodeController;
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
// Routele de baza
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/', 'AnimeController@carousel')->name('pages.home');
    Route::get('/lista-anime', 'AnimeController@animelist')->name('pages.lista-anime');
    Route::get('/episode', 'PagesController@episode')->name('pages.episode');
    Route::get('/anime', 'PagesController@anime')->name('pages.anime');
    Route::get('/staff', 'PagesController@staff')->name('pages.staff');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');
    Route::get('/autentificare', 'AuthController@showLoginForm')->name('autentificare');
    Route::post('/autentificare', 'AuthController@login');
    Route::get('/inregistrare', 'AuthController@showRegistrationForm')->name('inregistrare');
    Route::post('/inregistrare', 'AuthController@register');
});

// Ce tine de logare
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::post('logout', [AuthenticatedSessionController::class, '__invoke'])->name('logout');

// CRUD adaugare anime
Route::get('/admin/anime/create', [AnimeController::class, 'create'])->name('admin.add-anime');
Route::post('admin/anime', [AnimeController::class, 'store'])->name('admin.add-anime');

Route::get('/admin/episode/create', [EpisodeController::class, 'create'])->name('admin.add-episode');
Route::post('/admin/episode', [EpisodeController::class, 'store'])->name('admin.add-episode');

Route::get('/admin/anime/{id}/edit', [AnimeController::class, 'edit'])->name('admin.edit-anime');
Route::put('/admin/anime/{id}/edit', [AnimeController::class, 'update'])->name('anime.edit-anime');

Route::get('/admin/episode/{id}/edit', [EpisodeController::class, 'edit'])->name('admin.edit-episode');
Route::put('/admin/episode/{id}/edit', [EpisodeController::class, 'update'])->name('anime.edit-episode');

Route::get('/admin/animes', [AnimeController::class, 'index'])->name('admin.animes');
Route::get('/admin/episodes', [EpisodeController::class, 'index'])->name('admin.episodes');
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');
Route::get('/episode/{id}', [EpisodeController::class, 'show'])->name('episode.show');
Route::delete('/admin/anime/{id}', [AnimeController::class, 'destroy'])->name('admin.anime.delete');
Route::delete('/admin/episodes/{id}', 'EpisodeController@destroy')->name('admin.delete-episode');

// Butoane next & previous
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');
