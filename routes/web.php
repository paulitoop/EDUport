<?php

use App\Http\Controllers\MainController;
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

//Route::get('/', function () {
 //   return view('home');
//});

Route::get('/', [MainController::class, 'homepage']);
Route::get('/register', [MainController::class, 'register']);
Route::get('/newsert', [MainController::class, 'newsert']);
Route::get('/profile', [MainController::class, 'profile']);
Route::get('/aut', [MainController::class, 'aut']);
Route::get('/home', [MainController::class, 'home']);
// Route::post('/events', [MainController::class, 'events']);
Route::get('/events', [MainController::class, 'events']);
Route::get('/resume', [MainController::class, 'resume']);
Route::get('/newsert', [MainController::class, 'newsert']);
Route::get('/programs', [MainController::class, 'programs']);

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
