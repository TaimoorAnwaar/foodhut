<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'my_home'])->name('my_home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');


Route::get('/add_food', [AdminController::class, 'AddFood'])->name('add_food');

Route::post('/upload_food', [AdminController::class, 'UploadFood'])->name('up_food');

Route::get('/view_food', [AdminController::class, 'ViewFood'])->name('view_food');

Route::post('/delete_food/{food}', [AdminController::class, 'DeleteFood'])->name('Delete_food');
Route::get('/update_food/{food}', [AdminController::class, 'UpdateFood'])->name('update_food');
Route::post('/edit_food/{food}', [AdminController::class, 'EditFood'])->name('edit_food');


Route::post('/add_cart/{cart}', [HomeController::class, 'AddCart'])->name('add_cart');
Route::get('/my_cart', [HomeController::class, 'MYCart'])->name('my_cart');

Route::get('/remove_cart/{cart}', [HomeController::class, 'RemoveCart'])->name('remove_cart');


Route::post('/confirm_order', [HomeController::class, 'ConfirmOrder'])->name('confirm_order');

Route::get('/orders', [AdminController::class, 'ViewOrders'])->name('orders');
Route::get('/change-status/{id}/{status}', [AdminController::class, 'ChangeStatus'])->name('change_status');


Route::post('/book_table', [HomeController::class, 'BookTable'])->name('book_table');
Route::get('/reservations',[AdminController::class,'Reservations'])->name('reservations');





