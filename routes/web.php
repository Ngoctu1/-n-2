<?php
use App\Http\Controllers\userController;
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
    return view('users/home');
}) -> name('users.home');
Route::get('/admin', function () {
    return view('Admin/adminlte');
});
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
Route::get('/login', function () {
    return view('users/login');
}) -> name('users.login');
Route::get('/signup', function () {
    return view('users/register');
}) -> name('users.register');


Route::get('/productdetail', function () {
    return view('users/productdetail');
}) -> name('users.productdetail');

Route::get('/users',[UserController::class,'index']) -> name('users.index');
Route::get('/users/detail/{id}',[UserController::class,'detail']) -> name('users.detail');

// tr

//tu

// php artisan serve