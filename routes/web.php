<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('/eventsGo', [MainController::class, 'eventsGo']);
Route::get('/eventsEdu', [MainController::class, 'eventsEdu']);
Route::get('/resume', [MainController::class, 'resume']);
Route::get('/newsert', [MainController::class, 'newsert']);
Route::get('/programs', [MainController::class, 'programs']);
Route::get('/zachetka', [MainController::class, 'zachetka']);
Route::get('/test', [MainController::class, 'test']);
Route::get('/list', [MainController::class, 'list']);
Route::get('/muzei', [MainController::class, 'muzei']);
Auth::routes();
Route::get('/profile_rab', [MainController::class, 'profile_rab']);
Route::get('/profile_org', [MainController::class, 'profile_org']);
Route::post('store', [HomeController::class, 'store'])->name('store');

Route::get('/profile_dir', [MainController::class, 'redirectToProfile'])->name('redirect-to-profile');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
Route::post('/newsert', [App\Http\Controllers\CertificateController::class, 'store'])->name('newsert')->middleware('web');


Route::get('/list', [UserController::class, 'list']);





