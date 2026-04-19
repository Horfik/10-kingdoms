<?php

use App\Http\Controllers\KingdomController;
use Illuminate\Support\Facades\Route;

Route::get('/kingdoms', [KingdomController::class, 'index'])->name('kingdoms.index');
