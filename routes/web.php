<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Wishlist;
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
//HOME
Route::get('/',[HomeController::class,'index']);

//ADMIN
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);

//AUTHENTICATION ADMIN
Route::get('/register-auth',[AuthController::class,'register_auth']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/login-auth',[AuthController::class,'login_auth']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout-auth',[AuthController::class,'logout_auth']);

//CLIENT
Route::get('/client-login',[AdminController::class,'client_login']);


Route::get('/view-profile',[CheckoutController::class,'view_profile']);


//USER
Route::get('/user',[UserController::class,'index'])->middleware('auth.role');
Route::get('/add-user',[UserController::class,'add_user'])->middleware('auth.role');
Route::post('/save-user',[UserController::class,'save_user'])->middleware('auth.role');
Route::post('/assign-role',[UserController::class,'assign_role'])->middleware('auth.role');

//CATEGORY
// ROUTE::group(['middleware'=>'auth.role'],function(){

Route::get('/add-category',[CategoryController::class,'add_category']);
Route::get('/all-category',[CategoryController::class,'all_category']);
Route::post('/save-category',[CategoryController::class,'save_category']);

Route::get('/unactive-category-product/{category_product_id}',[CategoryController::class,'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryController::class,'active_category_product']);

Route::get('/edit-category/{category_product_id}',[CategoryController::class,'edit_category']);
Route::post('/update-category/{category_product_id}',[CategoryController::class,'update_category']);

Route::get('/delete-category/{category_product_id}',[CategoryController::class,'delete_category']);
//BRAND
Route::get('/add-brand',[BrandController::class,'add_brand']);
Route::get('/all-brand',[BrandController::class,'all_brand']);
Route::post('/save-brand',[BrandController::class,'save_brand']);

Route::get('/unactive-brand-product/{brand_product_id}',[BrandController::class,'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandController::class,'active_brand_product']);

Route::get('/edit-brand/{brand_product_id}',[BrandController::class,'edit_brand']);
Route::post('/update-brand/{brand_product_id}',[BrandController::class,'update_brand']);

Route::get('/delete-brand/{brand_product_id}',[BrandController::class,'delete_brand']);
//PRODUCT
Route::get('/add-product',[ProductController::class,'add_product']);
Route::get('/all-product',[ProductController::class,'all_product']);
Route::get('/all-product-content',[ProductController::class,'all_product_content']);

Route::get('/edit-product/{product_id}',[ProductController::class,'edit_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']);

Route::get('/unactive-product/{product_id}',[ProductController::class,'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class,'active_product']);

Route::post('/save-product',[ProductController::class,'save_product']);
Route::post('/update-product/{product_id}',[ProductController::class,'update_product']);



// });
//DETAILS
Route::get('/chi-tiet-san-pham/{product_id}',[ProductController::class,'detail_product']);


//SHOP
Route::get('/shop',[HomeController::class,'shop']);
// Danh muc san pham va trang chu
Route::get('/danh-muc-san-pham/{category_id}',[CategoryController::class,'show_category_home']);
// Thuong hieu san pham va trang chu
Route::get('/thuong-hieu-san-pham/{brand_id}',[BrandController::class,'show_brand_home']);

//SEARCH

Route::post('/tim-kiem',[HomeController::class,'search']);
Route::post('/autocomplete-ajax',[HomeController::class,'autocomplete_ajax']);


//CART
Route::post('/save-cart',[CartController::class,'save_cart']);
Route::get('/show-cart',[CartController::class,'show_cart']);
Route::get('/delete-cart/{rowId}',[CartController::class,'delete_cart']);
Route::post('/update-cart-quantity',[CartController::class,'update_cart_quantity']);
//AJAX
Route::post('/add-cart-ajax',[CartController::class,'add_cart_ajax']);
Route::post('/update-cart',[CartController::class,'update_cart']);
Route::get('/gio-hang',[CartController::class,'gio_hang']);
Route::get('/del-product/{session_id}',[CartController::class,'delete_product']);
Route::get('/del-all-product',[CartController::class,'delete_all_product']);

//COUPON 
Route::post('/check-coupon',[CartController::class,'check_coupon']);
Route::get('/unset-coupon',[CouponController::class,'unset_coupon']);
Route::get('/insert-coupon',[CouponController::class,'insert_coupon']);
Route::get('/delete-coupon/{coupon_id}',[CouponController::class,'delete_coupon']);
Route::get('/list-coupon',[CouponController::class,'list_coupon']);
Route::post('/insert-coupon-code',[CouponController::class,'insert_coupon_code']);

// CHECKOUT
Route::get('/login-checkout',[CheckoutController::class,'login_checkout']);
Route::post('/add-customer',[CheckoutController::class,'add_customer']);
Route::get('/checkout',[CheckoutController::class,'checkout']);
Route::get('/payment',[CheckoutController::class,'payment']);
Route::post('/save-checkout-customer',[CheckoutController::class,'save_checkout_customer']);
Route::get('/logout-checkout',[CheckoutController::class,'logout_checkout']);
Route::post('/login-customer',[CheckoutController::class,'login_customer']);
Route::post('/order-place',[CheckoutController::class,'order_place']);

Route::post('/select-delivery-home',[CheckoutController::class,'select_delivery_home']);
Route::post('/calculate-fee',[CheckoutController::class,'calculate_fee']);

Route::post('/confirm-order',[CheckoutController::class,'confirm_order']);


Route::get('/print-order/{checkout_code}',[OrderController::class,'print_order']);
Route::get('/manage-order',[OrderController::class,'manage_order']);
Route::get('/view-order/{order_code}',[OrderController::class,'view_order']);
Route::post('/update-order-qty',[OrderController::class,'update_order_qty']);
Route::post('/update-qty',[OrderController::class,'update_qty']);

//SEND MAIL
Route::get('/send-mail',[HomeController::class,'send_mail']);

//Login  google
Route::get('/login-google',[HomeController::class],'login_google');
Route::get('/google/callback',[HomeController::class],'callback_google');

//EDIT PROFILE ADMIN
Route::get('/edit-profile/{admin_id}',[AdminController::class,'edit_profile']);
Route::post('/save-profile/{admin_id}',[AdminController::class],'save_profile');


//DELIVERY
Route::get('/delivery',[DeliveryController::class,'delivery']);
Route::post('/select-delivery',[DeliveryController::class,'select_delivery']);
Route::post('/insert-delivery',[DeliveryController::class,'insert_delivery']);
Route::post('/select-feeship',[DeliveryController::class,'select_feeship']);
Route::post('/update-delivery',[DeliveryController::class,'update_delivery']);



//BLOG-ADMIN
Route::get('/add-new-blog',[BlogsController::class,'add_new_blog']);
Route::post('/save-blog',[BlogsController::class,'save_blog']);
//BLOG-WEB
Route::get('/blog-list',[BlogsController::class,'blog_list']);
Route::get('/blog-detail/{blog_id}',[BlogsController::class,'blog_detail']);

//BANNER
Route::get('/manage-slider',[SliderController::class,'manage_slider']);
Route::get('/add-slider',[SliderController::class,'add_slider']);
Route::post('/insert-slider',[SliderController::class,'insert_slider']);
Route::get('/unactive-slide/{slide_id}',[SliderController::class,'unactive_slide']);
Route::get('/active-slide/{slide_id}',[SliderController::class,'active_slide']);

