<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
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

// Home
Route::get('/', function () {
    return view('welcome');
});

// About
Route::get('/about', function () {
    return view('about');
});

// Contact
Route::get('/contact', function () {
    return view('contact');
});

// Gallery
Route::get('/gallery', function () {
    return view('gallery');
});

// Packages
Route::get('/spa', function () {
    return view('spa');
});
Route::get('/yoga', function () {
    return view('yoga');
});
Route::get('/honeymoon-packages', function () {
    return view('honeymoon-packages');
});

//Accommodation
Route::get('/accommodation', function () {
    return view('accommodation');
});
// menu Accommodation
Route::get('/suite-room-jungle-view', function () {
    return view('suite-room-jungle-view');
});
Route::get('/suite-room-premiere-jungle-view', function () {
    return view('suite-room-premiere-jungle-view');
});
Route::get('/suite-room-private-pool', function () {
    return view('suite-room-private-pool');
});
Route::get('/suite-room-premiere-private-pool', function () {
    return view('suite-room-premiere-private-pool');
});
// Event
Route::get('/events', [EventController::class, 'index']);
Route::get('/event-detail', [EventController::class, 'detail']);

// Article
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/article-detail', [ArticleController::class, 'detail']);
