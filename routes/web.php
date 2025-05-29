<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\PermissionController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [MainViewController::class, 'index'])->name('/');
Route::get('product-detail', [ProductController::class, 'showProductdetails'])->name('product.detail');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

  

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);


    //products
    Route::resource('products', ProductController::class);
    Route::post('product-approve', [ProductController::class, 'approve'])->name('products.approve');



    //permission
    Route::resource('permission', PermissionController::class);
    Route::delete('permission/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');
    Route::get('edit-permission/{id}', [PermissionController::class, 'show'])->name('permission.edit');
    Route::patch('update-permission/{id}', [PermissionController::class, 'update'])->name('permission.update');


});
