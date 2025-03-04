<?php

use App\Http\Controllers\{
    ProfileController,
    RoomReservationController
};
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/room-reservations', [RoomReservationController::class, 'index'])
->middleware(['auth', 'verified'])->name('room-reservations');
Route::get('/room-reservations/create', [RoomReservationController::class, 'create'])
->middleware(['auth', 'verified'])->name('room-reservations.create');
Route::post('/room-reservations', [RoomReservationController::class, 'store'])
->middleware(['auth', 'verified'])->name('room-reservations.store');
Route::delete('/room-reservations/{id}', [RoomReservationController::class, 'delete'])
->middleware(['auth', 'verified'])->name('room-reservations.delete');

require __DIR__.'/auth.php';
