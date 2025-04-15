<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile\AvatarController;
use App\Http\Controllers\TicketController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('login.github');

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->stateless()->user();
    $user = User::updateOrCreate(['email' => $user->email], [
        'name'     => $user->user['login'],
        'password' => 'password',
    ]);
    Auth::login($user);
    return redirect('/dashboard');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
//     Route::post('/ticket/create', [TicketController::class, 'store'])->name('ticket.store');
// });

Route::middleware('auth')->group(function () {
    Route::resource('/ticket', TicketController::class);
});

require __DIR__ . '/auth.php';