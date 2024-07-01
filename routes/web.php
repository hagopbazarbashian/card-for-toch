<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopPageController; 
use App\Http\Controllers\ShopCardController;
use App\Http\Controllers\ViewAllProductController;
use App\Http\Controllers\SingleShopPageController;
use App\Http\Controllers\ShopAddTocartController;
use App\Http\Controllers\ShopInfoController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LanguageController;
// Admin System
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserCardController;
use App\Http\Controllers\Admin\AdminSubscribeController;
use App\Http\Controllers\Admin\AdminUserAcount;
use App\Http\Controllers\Admin\MonthlyvisitorController;
use App\Http\Controllers\Admin\TranslationController;
// User System

//Admin Shop
use App\Http\Controllers\Admin\Shop\ShopSliderController;
use App\Http\Controllers\Admin\Shop\AddNewcardController;
use App\Http\Controllers\Admin\Shop\ColorController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Shop\AdminBobusController;
use App\Http\Controllers\Admin\Shop\AdminCheckOutControler;

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

//Home Page
Route::get('/' , [ShopPageController::class , 'index'])->name('welcome');

// Route to set language
Route::get('/set-language/{lang}', [ShopPageController::class, 'setLanguage'])->name('setLanguage');


// Admin System
Route::get('admin/login' , [AdminLoginController::class ,'index'])->name('admin_login');
Route::post('login_submit' , [AdminLoginController::class ,'login_submit'])->name('login_submit');
//Route::get('logout' , [AdminLoginController::class ,'logout'])->name('logout');

//Shop page
Route::get('shop-page' , [ShopPageController::class , 'index'])->name('shop_page');
Route::get('view-all' , [ViewAllProductController::class , 'index'])->name('view_all');
//Shop card

//////////////////////////////////
//End Shop card System 
Route::post('/add' , [ShopCardController::class , 'addToCart']);
Route::post('/update-price' , [ShopCardController::class , 'updatepricecard']);
Route::get('single-card/{id}' , [SingleShopPageController::class , 'index'])->name('single_card');
//quantity process ajax
Route::post('quantity-process' ,[SingleShopPageController::class  , 'quantityprocesssyatemstore']);
Route::resource('add-shop-card', ShopAddTocartController::class);
//End Shop Page System  
//////////////////////////////////

//////////////////////////////////
//Shop Card Info
Route::get('checkout/{id}' , [ShopInfoController::class , 'index'])->name('checkout');
Route::post('start-process' , [CheckoutController::class , 'startprocess'])->name('start_process')->middleware('redirect.if.get');

Route::get('/start-process', function () {
    return redirect()->back();
})->name('start.process.get');

Route::middleware(['admin:admin'])->group(function () {
    Route::get('admin_home' , [AdminHomeController::class , 'index'])->name('admin_home');
    // User System
    Route::resource('user-admin', AdminUserController::class);
    // User Update Admin
    Route::get('/user-admin/update/{id}', [AdminUserController::class , 'update'])->name('user-admin.update');
    // User Card
    Route::get('user-card' , [UserCardController::class , 'index'])->name('user_card');
    Route::get('sendmail/{email}' , [UserCardController::class , 'sendmail'])->name('sendmail');
    // Subscribe Admin
    Route::get('subscribe' , [SubscribeController::class , 'store'])->name('subscribe');
    //Admin Create Acount
    Route::resource('create-acount', AdminUserAcount::class);
    // monthly-statistics
    Route::get('/monthly-statistics', [MonthlyvisitorController::class, 'index'])->name('monthly_statistics');
    // Show Activ Card
    Route::get('/activ-card', [MonthlyvisitorController::class, 'activ'])->name('activ_card');

    //Start Shop Slider
    Route::resource('shop-slider', ShopSliderController::class);
    //Add New Card
    Route::resource('add-new-card', AddNewcardController::class);
    //Add Color
    Route::resource('color', ColorController::class);

    //coupon System
    Route::resource('coupon', AdminBobusController::class);

    //Admin Cheke Out 
    Route::resource('admin-check-out' ,AdminCheckOutControler::class);

    Route::resource('translations', TranslationController::class);

    // track-visitor
    Route::group(['middleware' => 'trackVisitor'], function () {
        Route::get('visitor', [VisitorController::class, 'showVisitorCount'])->name('visitor');
    });
});
