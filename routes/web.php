<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

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

/*
*   Home Page
*/
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

/* 
*   Shop
*/
Route::name('shop.')->prefix('shop')->group(function() {
  Route::get('/', [ShopController::class, 'index'])->name('index');
  Route::get('/{slug}', [ShopController::class, 'getProductsByCategory'])->name('products.category');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
