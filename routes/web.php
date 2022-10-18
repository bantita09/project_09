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

// Route::view('/contact', 'promotepage.contact')->name('contact');
// Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactpage'])->name('contact');
// Route::post('/contact', [App\Http\Controllers\ContactController::class, 'add'])->name('contact.add');

Route::get('/contact', [App\Http\Controllers\ContactPageController::class, 'contactpage'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactPageController::class, 'add'])->name('contact.add');

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
            //R house-blend
Route::get('/admin/stock/house-blend', [App\Http\Controllers\HouseBlendController::class, 'index'])->name('adminpage.stock.house-blend.adminhouseblend');
            //C house-blend
Route::get('/admin/stock/house-blend/add', [App\Http\Controllers\HouseBlendController::class, 'formadd'])->name('adminpage.stock.house-blend.formadd');
Route::post('/admin/stock/house-blend/add', [App\Http\Controllers\HouseBlendController::class, 'add'])->name('adminpage.stock.house-blend.add');
            //U house-blend
Route::get('/admin/stock/house-blend/edit', [App\Http\Controllers\HouseBlendController::class, 'formedit'])->name('adminpage.stock.house-blend.formedit');
Route::post('/admin/stock/house-blend/edit', [App\Http\Controllers\HouseBlendController::class, 'edit'])->name('adminpage.stock.house-blend.edit');


        //routes floral-tone
            //R floral-tone
Route::get('/admin/stock/floral-tone', [App\Http\Controllers\FloralToneController::class, 'index'])->name('adminpage.stock.floral-tone.adminfloraltone');
            //C floral-tone
Route::get('/admin/stock/floral-tone/add', [App\Http\Controllers\FloralToneController::class, 'formadd'])->name('adminpage.stock.floral-tone.formadd');
Route::post('/admin/stock/floral-tone/add', [App\Http\Controllers\FloralToneController::class, 'add'])->name('adminpage.stock.floral-tone.add');
            //U floral-tone
Route::get('/admin/stock/floral-tone/edit', [App\Http\Controllers\FloralToneController::class, 'formedit'])->name('adminpage.stock.floral-tone.formedit');
Route::post('/admin/stock/floral-tone/edit', [App\Http\Controllers\FloralToneController::class, 'edit'])->name('adminpage.stock.floral-tone.edit');

        //routes fruity-tone
            //R fruity-tone
Route::get('/admin/stock/fruity-tone', [App\Http\Controllers\FruityToneController::class, 'index'])->name('adminpage.stock.fruity-tone.adminfruitytone');
            //C fruity-tone
Route::get('/admin/stock/fruity-tone/add', [App\Http\Controllers\FruityToneController::class, 'formadd'])->name('adminpage.stock.fruity-tone.formadd');
Route::post('/admin/stock/fruity-tone/add', [App\Http\Controllers\FruityToneController::class, 'add'])->name('adminpage.stock.fruity-tone.add');
            //U fruity-tone
Route::get('/admin/stock/fruity-tone/edit', [App\Http\Controllers\FruityToneController::class, 'formedit'])->name('adminpage.stock.fruity-tone.formedit');
Route::post('/admin/stock/fruity-tone/edit', [App\Http\Controllers\FruityToneController::class, 'edit'])->name('adminpage.stock.fruity-tone.edit');


        //routes nutty-tone
            //R nutty-tone
Route::get('/admin/stock/nutty-tone', [App\Http\Controllers\NuttyToneController::class, 'index'])->name('adminpage.stock.nutty-tone.adminnuttytone');
            //C nutty-tone
Route::get('/admin/stock/nutty-tone/add', [App\Http\Controllers\NuttyToneController::class, 'formadd'])->name('adminpage.stock.nutty-tone.formadd');
Route::post('/admin/stock/nutty-tone/add', [App\Http\Controllers\NuttyToneController::class, 'add'])->name('adminpage.stock.nutty-tone.add');
            //U nutty-tone
Route::get('/admin/stock/nutty-tone/edit', [App\Http\Controllers\NuttyToneController::class, 'formedit'])->name('adminpage.stock.nutty-tone.formedit');
Route::post('/admin/stock/nutty-tone/edit', [App\Http\Controllers\NuttyToneController::class, 'edit'])->name('adminpage.stock.nutty-tone.edit');

        //routes winey-tone
            //R
Route::get('/admin/stock/winey-tone', [App\Http\Controllers\WineyToneController::class, 'index'])->name('adminpage.stock.winey-tone.adminwineytone');
            //C
Route::get('/admin/stock/winey-tone/add', [App\Http\Controllers\WineyToneController::class, 'formadd'])->name('adminpage.stock.winey-tone.formadd');
Route::post('/admin/stock/winey-tone/add', [App\Http\Controllers\WineyToneController::class, 'add'])->name('adminpage.stock.winey-tone.add');
            //U
Route::get('/admin/stock/winey-tone/edit', [App\Http\Controllers\WineyToneController::class, 'formedit'])->name('adminpage.stock.winey-tone.formedit');
Route::post('/admin/stock/winey-tone/edit', [App\Http\Controllers\WineyToneController::class, 'edit'])->name('adminpage.stock.winey-tone.edit');


    //routes order
Route::get('/admin/order', [App\Http\Controllers\OrderController::class, 'index'])->name('adminpage.order.adminorder');
Route::get('/admin/order/add', [App\Http\Controllers\OrderController::class, 'add'])->name('adminpage.order.add');
Route::get('/admin/order/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('adminpage.order.edit');

    //routes detail
        //R
Route::get('/admin/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('adminpage.detail.admindetail');
        //C
Route::get('/admin/detail/add', [App\Http\Controllers\DetailController::class, 'formadd'])->name('adminpage.detail.formadd');
Route::post('/admin/detail/add', [App\Http\Controllers\DetailController::class, 'add'])->name('adminpage.detail.add');
        //U
Route::get('/admin/detail/edit', [App\Http\Controllers\DetailController::class, 'formedit'])->name('adminpage.detail.formedit');
Route::post('/admin/detail/edit', [App\Http\Controllers\DetailController::class, 'edit'])->name('adminpage.detail.edit');

    //routes contact
Route::get('/admin/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('adminpage.contact.admincontact');

    //routes user
        //R
Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('adminpage.user.adminuser');
        //C
Route::get('/admin/user/add', [App\Http\Controllers\UserController::class, 'formadd'])->name('adminpage.user.formadd');
Route::post('/admin/user/add', [App\Http\Controllers\UserController::class, 'add'])->name('adminpage.user.add');
        //U
Route::get('/admin/user/edit', [App\Http\Controllers\UserController::class, 'formedit'])->name('adminpage.user.formedit');
Route::post('/admin/user/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('adminpage.user.edit');

// End Admin
