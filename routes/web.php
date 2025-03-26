<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, "welcome"])->name("welcome");


/* email store - newsletter */
Route::post("/", [UserController::class, "emailstore"]);

/* user */
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/products', [UserController::class, 'products'])->name('products');
    Route::get('/products/{id}', [UserController::class, 'viewProduct'])->name('view.product');
    Route::get('/products/update/{id}', [UserController::class, 'viewUpdateProduct'])->name('update.product');
    Route::put('/products/update/{id}', [UserController::class, 'updateProduct']);
    Route::delete('/products/{id}', [UserController::class, 'deleteProduct']);
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/create', [UserController::class, 'store'])->name('store');
    Route::get('/stock', [UserController::class, 'stock'])->name('stock');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
