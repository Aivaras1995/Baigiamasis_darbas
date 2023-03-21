<?php

use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsPersonnel;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user_dashboard', [UsersController::class,'user_dashboard'])->name('user_dashboard');
});
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', IsPersonnel::class]], function () {
    Route::get('/', DashBoardController::class)->name('admin.dashboard');
    Route::resources([
        'products' => ProductsController::class,
        'categories' => CategoriesController::class,
        'orders' => OrderController::class,
        'persons' => PersonController::class,
        'payments' => PaymentController::class,
        'addresses' => AddressController::class,
        'users' => UserController::class,
        'statuses' => StatusController::class,]);
});
Route::get('/products', [ProductController::class, 'index'])->name('user.products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('user.products.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('user.categories.index');
Route::get('/search', [ProductController::class, 'search'])->name('search');

require __DIR__.'/auth.php';
