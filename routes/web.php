<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('posts.index');
// });

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::resource('post', PostController::class);

// YouTube
// Chanel name: Dani Krossing
// Video name: Laravel for complete beginners
// Video number: 12
// Video progress: 16:50

// After creating a new project, first terminal command to run:
// composer require barryvdh/laravel-debugbar --dev

// Live version of Laravel:
// npm install vite
// npx vite -- must have own terminal
// npm run dev -- must have own terminal
