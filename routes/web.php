<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\KingdomController;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Dashboard',['background' => asset('storage/main.jpg')]);
});

Route::get('/', function () {
    return Inertia::render('Dashboard',['background' => asset('storage/main.jpg')]);
})->name('dashboard');

Route::group(['prefix' => 'art'], function(){
    Route::get('/', [ArtController::class, 'index'])->name('art.index');
    Route::get('/create', [ArtController::class, 'create'])->name('art.create')->middleware(['auth', 'role']);
    Route::post('/', [ArtController::class, 'store'])->name('art.store')->middleware(['auth', 'role']);
    Route::get('/{art}/edit', [ArtController::class, 'edit'])->name('art.edit')->middleware(['auth', 'role']);
    Route::patch('/{art}', [ArtController::class, 'update'])->name('art.update')->middleware(['auth', 'role']);
    Route::delete('/{art}', [ArtController::class, 'destroy'])->name('art.destroy')->middleware(['auth', 'role']);
});

Route::group(['prefix' => 'kingdom'], function(){
    Route::get('/', [KingdomController::class, 'index'])->name('kingdom.index');
    Route::get('/create', [KingdomController::class, 'create'])->name('kingdom.create')->middleware(['auth', 'role']);
    Route::post('/', [KingdomController::class, 'store'])->name('kingdom.store')->middleware(['auth', 'role']);
    Route::get('/{kingdom}/edit', [KingdomController::class, 'edit'])->name('kingdom.edit')->middleware(['auth', 'role']);
    Route::patch('/{kingdom}', [KingdomController::class, 'update'])->name('kingdom.update')->middleware(['auth', 'role']);
    Route::delete('/{kingdom}', [KingdomController::class, 'destroy'])->name('kingdom.destroy')->middleware(['auth', 'role']);
});

Route::get('person/', [PersonController::class, 'index'])->name('person.index');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'characters'], function(){
        Route::get('/show', function () {
            return Inertia::render('Character/Show');
        })->name('character.show');
    });
});

Route::middleware(['auth', 'role'])->prefix('admin')->group(function () {
    Route::get('/', function(){
        return Inertia::render("Admin/Index");
    })->name('admin.index');

    Route::prefix('person')->group(function(){
        Route::get('/', App\Http\Controllers\Admin\PersonController::class)->name('admin.person.index');
        Route::get('/create', [PersonController::class, 'create'])->name('person.create');
        Route::post('/', [PersonController::class, 'store'])->name('person.store');
        Route::get('/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');
        Route::patch('/{person}', [PersonController::class, 'update'])->name('person.update');
        Route::delete('/{person}', [PersonController::class, 'destroy'])->name('person.destroy');
    });
});

require __DIR__.'/auth.php';
