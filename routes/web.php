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

    //routes home
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

    //routes stock
        //routes house-blend
Route::get('/admin/stock/house-blend', [App\Http\Controllers\HouseBlendController::class, 'index'])->name('adminpage.stock.house-blend.adminhouseblend');
Route::get('/admin/stock/house-blend/add', [App\Http\Controllers\HouseBlendController::class, 'add'])->name('adminpage.stock.house-blend.add');
Route::get('/admin/stock/house-blend/edit', [App\Http\Controllers\HouseBlendController::class, 'edit'])->name('adminpage.stock.house-blend.edit');


        //routes floral-tone
Route::get('/admin/stock/floral-tone', [App\Http\Controllers\FloralToneController::class, 'index'])->name('adminpage.stock.floral-tone.adminfloraltone');
Route::get('/admin/stock/floral-tone/add', [App\Http\Controllers\FloralToneController::class, 'add'])->name('adminpage.stock.floral-tone.add');
Route::get('/admin/stock/floral-tone/edit', [App\Http\Controllers\FloralToneController::class, 'edit'])->name('adminpage.stock.floral-tone.edit');

        //routes fruity-tone
Route::get('/admin/stock/fruity-tone', [App\Http\Controllers\FruityToneController::class, 'index'])->name('adminpage.stock.fruity-tone.adminfruitytone');
Route::get('/admin/stock/fruity-tone/add', [App\Http\Controllers\FruityToneController::class, 'add'])->name('adminpage.stock.fruity-tone.add');
Route::get('/admin/stock/fruity-tone/edit', [App\Http\Controllers\FruityToneController::class, 'edit'])->name('adminpage.stock.fruity-tone.edit');


        //routes nutty-tone
Route::get('/admin/stock/nutty-tone', [App\Http\Controllers\NuttyToneController::class, 'index'])->name('adminpage.stock.nutty-tone.adminnuttytone');
Route::get('/admin/stock/nutty-tone/add', [App\Http\Controllers\NuttyToneController::class, 'add'])->name('adminpage.stock.nutty-tone.add');
Route::get('/admin/stock/nutty-tone/edit', [App\Http\Controllers\NuttyToneController::class, 'edit'])->name('adminpage.stock.nutty-tone.edit');

        //routes winey-tone
Route::get('/admin/stock/winey-tone', [App\Http\Controllers\WineyToneController::class, 'index'])->name('adminpage.stock.winey-tone.adminwineytone');
Route::get('/admin/stock/winey-tone/add', [App\Http\Controllers\WineyToneController::class, 'add'])->name('adminpage.stock.winey-tone.add');
Route::get('/admin/stock/winey-tone/edit', [App\Http\Controllers\WineyToneController::class, 'edit'])->name('adminpage.stock.winey-tone.edit');


    //routes order
Route::get('/admin/order', [App\Http\Controllers\OrderController::class, 'index'])->name('adminpage.order.adminorder');
Route::get('/admin/order/add', [App\Http\Controllers\OrderController::class, 'add'])->name('adminpage.order.add');
Route::get('/admin/order/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('adminpage.order.edit');

    //routes detail
Route::get('/admin/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('adminpage.detail.admindetail');
Route::get('/admin/detail/add', [App\Http\Controllers\DetailController::class, 'add'])->name('adminpage.detail.add');
Route::get('/admin/detail/edit', [App\Http\Controllers\DetailController::class, 'edit'])->name('adminpage.detail.edit');

    //routes contact
Route::get('/admin/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('adminpage.contact.admincontact');

    //routes user
Route::get('/admin/user', [App\Http\Controllers\ContactController::class, 'index'])->name('adminpage.user.adminuser');
Route::get('/admin/user/add', [App\Http\Controllers\DetailController::class, 'add'])->name('adminpage.user.add');
Route::get('/admin/user/edit', [App\Http\Controllers\DetailController::class, 'edit'])->name('adminpage.user.edit');

// End Admin
