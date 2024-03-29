<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TvShowController;
use App\Http\Controllers\VoteController;

// ...

Route::get('/tvshow', [TvShowController::class, 'index'])->name('tvshow.index');


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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tvshow', function () {return view('tvshow');});

Route::get('/videoGame', function () {return view('videoGame');});

Route::get('/Gallery', function () {return view('Gallery');});


Route::post('/vote', [VoteController::class, 'vote']);

Route::get('/vote', 'VoteController@show')->name('vote.show');
Route::post('/vote', 'VoteController@vote')->name('vote.vote');
