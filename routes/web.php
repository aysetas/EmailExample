<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationsController;
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
    return view('layouts.admin-master');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('email');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

/*Ödev kısmı*/
Route::get('/email', [mailController::class, 'emailView'])->name('emails');
Route::get('/addProduct', [ProductController::class, 'show'])->name('showProduct');
Route::post('/saveProduct', [ProductController::class, 'save'])->name('saveProduct');

/*mülakat sorusu*/
Route::get('/notifications' , [NotificationsController::class, 'index']);
