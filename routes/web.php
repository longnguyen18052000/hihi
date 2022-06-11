<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\PhoneContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [HomeController::class, 'viewHome'])->name('home');

Route::get('hoangha', [UserController::class, 'hoangha'])->name('hoangha');

Route::get('user/register', [UserController::class, 'register'])->name('register');

Route::get('user/login', [UserController::class, 'login'])->name('login');

Route::post('hoangha', [UserController::class, 'register_action'])->name('register.action');

Route::post('login123', [UserController::class, 'login_action'])->name('login.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');


//admin
//admin/index
Route::get('admin/index', [CustomerController::class, 'index'])->name('index');

Route::get('admin/edit', [CustomerController::class, 'edit'])->name('admin.edit');

Route::post('admin/index', [CustomerController::class, 'store'])->name('admin.store');

Route::delete('admin/index/{user_id}', [CustomerController::class, 'destroy'])->name('admin.destroy');

Route::put('admin/index/{user_id}', [CustomerController::class, 'update'])->name('admin.update');

// product
Route::get('admin/product', [ProductController::class, 'view_product'])->name('product');

Route::post('admin/product', [ProductController::class, 'product_store'])->name('product.store');

Route::delete('admin/product/{product_id}', [ProductController::class, 'product_delete'])->name('product.delete');

// home
Route::get('homeProduct', [HomeController::class, 'home_product'])->name('home_product');

Route::post('homeProduct', [HomeController::class, 'homeproduct_index'])->name('homeproduct.store');

Route::delete('homeProduct/{product_id}', [HomeController::class, 'home_delete'])->name('home_delete');



Route::post('phoneProduct', [HomeController::class, 'phone_index'])->name('phone.store');

Route::delete('phoneProduct/{phone_id}', [HomeController::class, 'phone_delete'])->name('phone_delete');



Route::post('iconProduct', [HomeController::class, 'icon_index'])->name('icon.store');

Route::get('homeEdit/{id}', [HomeController::class, 'icon_edit'])->name('icon.edit');

Route::get('homeUpdate/{icon_id}', [HomeController::class, 'icon_update'])->name('icon.update');

Route::delete('iconProduct/{icon_id}', [HomeController::class, 'icon_delete'])->name('icon.delete');



Route::post('slideProduct', [HomeController::class, 'slide_index'])->name('slide.store');

Route::get('slideEdit/{id}', [HomeController::class, 'slide_edit'])->name('slide.edit');

Route::get('slideUpdate/{id}', [HomeController::class, 'slide_update'])->name('slide.update');

Route::delete('slideProduct/{id}', [HomeController::class, 'slide_delete'])->name('slide.delete');



Route::post('bannerProduct', [HomeController::class, 'banner_index'])->name('banner.store');

Route::get('bannerEdit/{id}', [HomeController::class, 'banner_edit'])->name('banner.edit');

Route::get('bannerUpdate/{id}', [HomeController::class, 'banner_update'])->name('banner.update');

Route::delete('bannerProduct/{id}', [HomeController::class, 'banner_delete'])->name('banner.delete');



Route::post('watchProduct', [HomeController::class, 'watch_index'])->name('watch.store');

Route::delete('watchProduct/{id}', [HomeController::class, 'watch_delete'])->name('watch.delete');



Route::post('accessoryProduct', [HomeController::class, 'accessory_index'])->name('accessory.store');

Route::delete('accessoryProduct/{id}', [HomeController::class, 'accessory_delete'])->name('accessory.delete');


Route::post('technologyProduct', [HomeController::class, 'technology_index'])->name('technology.store');

Route::delete('technologyProduct/{id}', [HomeController::class, 'technology_delete'])->name('technology.delete');


Route::post('likeProduct', [HomeController::class, 'like_index'])->name('like.store');

Route::delete('likeProduct/{id}', [HomeController::class, 'like_delete'])->name('like.delete');


Route::post('telephoneProduct', [HomeController::class, 'telephone_index'])->name('telephone.store');

Route::delete('telephoneProduct/{id}', [HomeController::class, 'telephone_delete'])->name('telephone.delete');


Route::group(['prefix' => 'HomeContent'], function () {
    Route::get('icon', [HomeContentController::class, 'icon_index'])->name('homecontent.icon');
    Route::get('like', [HomeContentController::class, 'like_index'])->name('homecontent.like');
    Route::get('technology', [HomeContentController::class, 'technology_index'])->name('homecontent.technology');
    Route::get('accessory', [HomeContentController::class, 'accessory_index'])->name('homecontent.accessory');
    Route::get('watch', [HomeContentController::class, 'watch_index'])->name('homecontent.watch');
    Route::get('banner', [HomeContentController::class, 'banner_index'])->name('homecontent.banner');
    Route::get('slide', [HomeContentController::class, 'slide_index'])->name('homecontent.slide');
    Route::get('telephone', [HomeContentController::class, 'telephone_index'])->name('homecontent.telephone');
});

Route::group(['prefix' => 'phonecontent'], function () {
    Route::get('manager', [PhoneContentController::class, 'manager'])->name('phonecontent.manager');
    Route::post('manager', [PhoneContentController::class, 'manager_store'])->name('manager.store');
    Route::delete('manager/{id}', [PhoneContentController::class, 'manager_delete'])->name('manager.delete');

    Route::get('phone/{id}', [PhoneContentController::class, 'phonecontent_phone_index'])->name('phonecontent.phone.new');
    Route::post('shoppingCart/{id}', [PhoneContentController::class, 'phonecontent_phone_post'])->name('phonecontent_shoppingCart.phone0');
    Route::post('phonecontent_product/{id}', [PhoneContentController::class, 'phonecontent_product_post'])->name('phonecontent_product.phone0');
    Route::post('phone/{id}', [CommentContentController::class, 'comment_index'])->name('comment');

    Route::get('shoppingCart', [PhoneContentController::class, 'shoppingCart_index'])->name('phonecontent.shoppingCart');
    Route::post('shoppingCart1/{id}', [PhoneContentController::class, 'shoppingCart_delete'])->name('phonecontent.shoppingCart_delete');
    Route::post('shoppingCartIncrement/{id}', [PhoneContentController::class, 'shoppingCart_increment'])->name('incrementphone');
    Route::post('shoppingCartDecrement/{id}', [PhoneContentController::class, 'shoppingCart_decrement'])->name('decrementphone');
    Route::post('success', [PhoneContentController::class, 'shoppingCart_post'])->name('button_shoppingCart');
});


Route::prefix('apple')->group(function () {
    Route::get('apple/{home_product_id}', [AppleController::class, 'apple_index'])->name('apple.index');
    Route::post('shoppingCart/{home_product_id}', [AppleController::class, 'phonecontent_apple_post'])->name('shoppingApple.apple0');

    Route::get('shoppingApple', [AppleController::class, 'apple'])->name('apple');
    Route::post('shoppingApple/{home_product_id}', [AppleController::class, 'shoppingApple_delete'])->name('shoppingApple.delete');
    Route::post('shoppingAppleIncrement/{home_product_id}', [AppleController::class, 'shoppingApple_increment'])->name('increment');
    Route::post('shoppingAppleDecrement/{home_product_id}', [AppleController::class, 'shoppingApple_decrement'])->name('decrement');
    Route::post('success', [AppleController::class, 'shoppingApple_post'])->name('button_shoppingApple');
});
