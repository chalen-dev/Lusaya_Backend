<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class, 'index']);

Route::resource('posts', PostsController::class);


