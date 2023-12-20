<?php

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

Route::get('/', [App\Http\Controllers\MyuserController::class, 'index'])->name('myuser.list');
Route::get('/create', [App\Http\Controllers\MyuserController::class, 'create'])->name('myuser.create');
Route::get('/edit/{id}', [App\Http\Controllers\MyuserController::class, 'edit'])->name('myuser.edit');
Route::get('/myuser/{id}', [App\Http\Controllers\MyuserController::class, 'show'])->name('myuser.show');
Route::post('/store', [App\Http\Controllers\MyuserController::class, 'store'])->name('myuser.store');
Route::post('/update/{id}', [App\Http\Controllers\MyuserController::class, 'update'])->name('myuser.update');
Route::delete('/delete/{id}', [App\Http\Controllers\MyuserController::class, 'delete'])->name('myuser.delete');
