<?php
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
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

//thay doi o day

Route::get('/', function () {
    return view('users/modun-user/home');
})-> name('users.home');

Route::get('/login', function () {
    return view('users/login');
}) -> name('users.login');

Route::get('/signup', function () {
    return view('users/register');
}) -> name('users.register');

Route::get('/productdetail', function () {
    return view('users/modun-user/productdetail');
}) -> name('users.productdetail');
Route::get('/product', function () {
    return view('users/modun-user/product');
}) -> name('users.product');

Route::get('/users/detail/{id}',[UserController::class,'detail']) -> name('users.detail');

//ADMIN
Route::get('/admin/account',[AdminController::class,'account']) -> name('admin.account');
Route::get('/admin', function () {
    return view('Admin/modun/dashboard');
}) -> name('admin.dashboard');



// tr

//tu

// php artisan serve 1