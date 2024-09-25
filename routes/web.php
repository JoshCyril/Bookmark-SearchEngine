<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApiController;

use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'storeDropdownValue'])->name('home');

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/call-api',[ApiController::class, 'callApi'] )->name('call.api');

Route::match(['get', 'post'], '/', [HomeController::class, 'index'])->name('home');

// Route::post('/process-dropdown', function (\Illuminate\Http\Request $request) {
//     // This route doesn't do anything, because the middleware will handle the session storage.
//     return redirect()->back();
// })->name('process.dropdown');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/db', function () {
//     return redirect('/');
// });

require __DIR__.'/auth.php';
