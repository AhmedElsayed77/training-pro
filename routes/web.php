<?php

use App\Models\UserModel;
use Illuminate\Support\Facades\Route;

Route::get('/profile/{name}', [UserModel::class, 'profile']);

