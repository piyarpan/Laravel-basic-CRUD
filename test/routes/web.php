<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

//routing to category controller in controller folder

Route::get('/', [CategoryController::class, 'index']) -> name('index');

Route::get('category-create', [CategoryController::class, 'create'])->name('create');

Route::post('category-store', [CategoryController::class, 'store'])->name('store');

Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('edit');

Route::put('category-update/{id}', [CategoryController::class, 'update'])->name('update');

Route::delete('category-delete/{id}', [CategoryController::class, 'delete'])->name('delete');


