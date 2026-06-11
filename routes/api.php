<?php

use App\Http\Controllers\KingdomController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::get('/kingdoms', [KingdomController::class, 'index'])->name('kingdoms.index');
Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations.index');
