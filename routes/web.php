<?php

use App\Http\Controllers\ProductController;
use App\Models\Poslovnica;
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

Route::get('/', function () {
    $poslovnice = Poslovnica::all();
    return view('welcome', ['poslovnice' => $poslovnice]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get(
    'home/all-products',
    [ProductController::class, 'show_all_products']
)->name('all-products')->middleware('auth');
Route::get('home/delete/{id}', [ProductController::class, 'show_delete_form'])->name('deleteForm')->middleware('auth');
Route::post('home/remove', [ProductController::class, 'remove_product'])->name('removeProduct')->middleware('auth');
Route::get('home/update/{id}', [ProductController::class, 'show_update_form'])->name('updateForm')->middleware('auth');
Route::post('home/update', [ProductController::class, 'update_product'])->name('updateProduct')->middleware('auth');

Route::get('home/add-new', [ProductController::class, 'show_add_form'])->name('showAddForm')->middleware('auth');
Route::post('home/add-new', [ProductController::class, 'add_product'])->name('addProduct')->middleware('auth');
