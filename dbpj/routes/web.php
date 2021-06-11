<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\http\Controllers\SessionController;

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

Route::get('/', [PersonController::class, 'index']);
Route::get('/person', [PersonController::class, 'index'])->middleware('auth');
Route::get('/person/auth', [PersonController::class, 'getAuth']);
Route::post('/person/auth', [PersonController::class, 'posAuth']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
