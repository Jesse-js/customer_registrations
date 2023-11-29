<?php

use App\Http\Controllers\SaudacaoController;
use App\Http\Controllers\SiteController;
use App\Models\Client;
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

Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/services', [SiteController::class, 'services']);
Route::get('/service/{id}', [SiteController::class, 'services']);
Route::get('/saudacao/{nome?}', SaudacaoController::class);

Route::get('/clients', function() {
   return Client::all();
});
