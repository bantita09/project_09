<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Start Promote

Route::view('/', 'promotepage.home')->name('home');
Route::view('/house-blend', 'promotepage.house-blend')->name('house-blend');
Route::view('/single-origin', 'promotepage.single-origin')->name('single-origin');
Route::view('/beverage-menu', 'promotepage.beverage-menu')->name('beverage-menu');

// End Promote

// Start Admin

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('/', 'promotepage.home')->name('home');
// Route::view('/admin/home', 'adminpage.adminhome')->name('adminhome');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

Route::get('/admin/stock/house-blend', [App\Http\Controllers\HouseBlendController::class, 'index'])->name('adminpage.stock.house-blend.adminhouseblend');
Route::get('/admin/stock/floral-tone', [App\Http\Controllers\FloralToneController::class, 'index'])->name('adminpage.stock.floral-tone.adminfloraltone');
Route::get('/admin/stock/fruity-tone', [App\Http\Controllers\FruityToneController::class, 'index'])->name('adminpage.stock.fruity-tone.adminfruitytone');
Route::get('/admin/stock/nutty-tone', [App\Http\Controllers\NuttyToneController::class, 'index'])->name('adminpage.stock.nutty-tone.adminnuttytone');
Route::get('/admin/stock/winey-tone', [App\Http\Controllers\WineyToneController::class, 'index'])->name('adminpage.stock.winey-tone.adminwineytone');

Route::get('/admin/order', [App\Http\Controllers\OrderController::class, 'index'])->name('adminpage.order.adminorder');
Route::get('/admin/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('adminpage.detail.admindetail');
Route::get('/admin/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('adminpage.contact.admincontact');


// End Admin
