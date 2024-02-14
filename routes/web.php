<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeControler::class,'index'])->name('index');
Route::get('/category/{category:slug}', [HomeControler::class,'byCategory'])->name('by-category');
Route::get('/company/{company:slug}', [HomeControler::class,'byCategory'])->name('by-company');
Route::get('/{post:slug}', [HomeControler::class,'show'])->name('view');
Route::get('/promotion/{post}', [PostController::class, 'view'])->name('promotion');
Route::post('/send-promotion-notification/{post}', [App\Http\Controllers\PostController::class, 'sendPromotionNotification'])
    ->name('send-promotion-notification');
