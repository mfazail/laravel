<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
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
    return view('home.index');
});


Route::get('/packages/premium',[PackageController::class,'premium'])->name('premium');
Route::get('/packages/economic',[PackageController::class,'economic'])->name('economic');
Route::get('/packages/basic',[PackageController::class,'basic'])->name('basic');


Route::get('/search',[PackageController::class,'search'])->name('search');


Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    return view('profile.show');
})->name('profile');

Route::middleware(['auth'],)->group(function(){
    Route::get('/packages/{id}',[PackageController::class,'show'])->name('packages.show');
    Route::post('/packages/{id}/book',[PackageController::class,'booked'])->name('packages.book');
    Route::post('/packages/{id}/review',[PackageController::class,'review'])->name('review');
});
Route::middleware(['admin'])->prefix('admin')->group(function(){
    Route::get('/users',[AdminController::class,'index'])->name('allUser');
    Route::get('/users/{id}',[AdminController::class,'userDetails'])->name('user.details');

});