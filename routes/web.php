<?php
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Function_;


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

//--------------login-------------------
//Route::get('/login', [loginController::class,'getlogin']) -> name('users.login');
//Route::post('/login', [loginController::class,'login']) -> name('users.login');




//---------------User----------------


Route::get('/order', [userController::class,'order']) -> name('users.order');
Route::get('/order/detail/{id}', [userController::class,'orderdetail']) -> name('users.orderdetail');
Route::get('/order/cancel/{id}', [userController::class,'ordercancel']) -> name('users.ordercancel');


//
//------------------------------product----------------------------
Route::get('/productdetail/{id}', [ProductController::class,'prd_detail']
) -> name('users.productdetail');
Route::get('/product', [ProductController::class,'product']) -> name('users.product');

Route::get('/product/{id}', [ProductController::class,'prdbybrand']) -> name('product.brand');





//------------------------Cart---------------
Route::prefix('account')->group(function () {
Route::get('/cart', function () {
    return view('users/modun-user/cart');
}) -> name('users.cart');


Route::get('/payment', [CartController::class,'pay']) -> name('users.payment');

Route::get('/add_cart/{id}',[userController::class,'addcart']) -> name('users.cart1');

Route::get('/cartshop', function () {
    return view('users/modun-user/cartshop');
}) -> name('users.cartshop');

Route::get('/cartshop', function () {
    return view('users/modun-user/cartshop');
}) -> name('users.cartshop');


Route::get('/delete/{id}',[CartController::class,'deletecart'])-> name('cart.delete');
Route::get('/cart/plus/{id}',[CartController::class,'pluscart']) -> name('cart.plus');
Route::get('/cart/minus/{id}',[CartController::class,'minuscart'])-> name('cart.minus');


Route::post('/add_cart',[CartController::class,'addcart']) -> name('cart.add');


Route::get('/pay', function () {
    return view('users.modun-user.payment.payment');
});

Route::get('/success',[CartController::class,'cartsuccess'])-> name('cart.success');




});
//---------------end Cart----------------------
Route::post('/admin/product/edit/{id}',[AdminController::class,'prd_edit']) -> name('admin.prd_edit');

Route::get('/checkout', [CheckoutController::class,'getCheckout'])->name('checkout.index');
Route::post('/checkout/order', [CheckoutController::class,'placeOrder'])->name('checkout.place.order');


//-------------------ADMIN------------------------



Route::prefix('admin') ->middleware('level')->group(function () {
Route::get('/', function () {
    return view('Admin/modun/dashboard');
}) -> name('admin.dashboard') ;
    //----------------Acount----------------
Route::prefix('account')->group(function () {

Route::get('/',[AdminController::class,'account']) -> name('admin.account');
Route::get('/modify/{id}',[AdminController::class,'modify']) -> name('account.detail');
Route::get('/delete/{id}',[AdminController::class,'delete']) -> name('account.delete');
Route::post('/edit/{id}',[AdminController::class,'edit']) -> name('account.edit');
Route::post('/img/{id}',[AdminController::class,'image']) -> name('account.image');
});


    //-----------------Product----------------
Route::prefix('product')->group(function () {
Route::get('/', [AdminController::class,'product']) -> name('admin.product'); 
Route::get('/{id}', [AdminController::class,'productorderby']) -> name('admin.productorderby'); 

//----------------edit prd------------

Route::get('/modify/{id}',[AdminController::class,'prd_modify']) -> name('admin.prd_detail');
Route::post('/edit/{id}',[AdminController::class,'prd_edit']) -> name('admin.prd_edit');


//---------------add prd-----------



});

Route::get('/checkorder', [AdminController::class,'order']
) -> name('admin.order');
Route::get('/checkorder/{id}', [AdminController::class, 'orderorderby'])->name('admin.orderorderby');

Route::get('/checkorder/orderdetail/{id}', [AdminController::class,'orderdetail']
) -> name('admin.orderdetail');

Route::get('update-status/{id}/{value}', [AdminController::class, 'updateStatus'])->name('admin.updatestatus');




Route::get('/productt/add', [AdminController::class,'addprdform']) -> name('admin.add');
Route::post('/productt/add',[AdminController::class,'prd_add']) -> name('admin.prd_add');


});



// tr

//tu

// php artisan serve 1
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('users/modun-user/home');
})-> name('home1');
Route::get('/logintest', function () {
    return view('users/login');
})-> name('home1');