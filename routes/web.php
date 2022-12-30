<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [AuthController::class, 'login'])->name('auth.logi1n');

Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/register', [AuthController::class, 'registration'])->name('auth.registration');
Route::post('/auth/signIn', [AuthController::class, 'signIn'])->name('auth.signIn');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/profiles', [ProfileController::class, 'profiles'])->name('profiles');
