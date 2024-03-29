<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal\LandingController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [LandingController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
