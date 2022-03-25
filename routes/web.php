<?php

use App\Http\Controllers\DiplomaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/diplomas', [DiplomaController::class, 'index'])
    ->middleware('auth')
    ->name('diplomas.index');
Route::get('/diplomas/create', [DiplomaController::class, 'create'])->name('diplomas.create');
Route::post('/diplomas', [DiplomaController::class, 'store'])->name('diplomas.store');
Route::get('/diplomas/search', [DiplomaController::class, 'search'])->name('diplomas.search');
Route::get('/diplomas/{diploma}', [DiplomaController::class, 'show'])->name('diplomas.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('diplomas.index');
})->name('dashboard');
