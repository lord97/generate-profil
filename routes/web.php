<?php

use App\Http\Controllers\genProfilController;
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

//index page
Route::view('/',view: 'index');

//controller for profile generation

Route::post('/generate-profile', action: genProfilController::class)->name('generate-profile');
