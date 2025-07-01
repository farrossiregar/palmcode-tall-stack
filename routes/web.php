<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return 'Login Page 123';
// })->name('login');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    // return 'Admin';
    Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
});


// Route::middleware(['auth', 'admin'])->group(...);
