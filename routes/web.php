<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentangkami', [HomeController::class, 'abaout']);
Route::get('/services', [HomeController::class, 'service']);
Route::get('/blog', [HomeBlogController::class, 'index']);
Route::get('/blog/show/{id}', [HomeBlogController::class, 'show']);
Route::get('/hubungikami', [HomeContactController::class, 'index']);
Route::post('/hubungikami/send', [HomeContactController::class, 'send']);
Route::get('/produk', [HomeProdukController::class, 'index']);
Route::get('/produk/show/{id}', [HomeProdukController::class, 'show']);


//auth
Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

//====ADMIN====
//---pengaman---
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/abaout', [AdminAboutController::class, 'index']);
    Route::put('/abaout/update', [AdminAboutController::class, 'update']);

    Route::resource('/produk', AdminProdukController::class);

    Route::resource('/posts/blog', AdminBlogController::class);
    // Route::resource('/posts/kategori', AdminKategoriController::class);

    Route::resource('/pesan', AdminPesanController::class);
    Route::resource('/service', AdminServiceController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
});