<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Http\Controllers\PostController;

Route::get('/', Login::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);

Route::middleware(['auth.livewire'])->group(function () {
    Route::get('/post', PostComponent::class);
    Route::post('/updatePostAdmin', [PostController::class, 'updatePostAdmin']);
});
