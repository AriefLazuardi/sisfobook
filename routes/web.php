<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\SiteController;
use App\Models\Book;  
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('index-book',[BookController::class,'index']);

Route::get('index-category',[CategoryController::class,'index'])
    ->name('category.index')
    ->middleware('auth');
Route::get('category/create',[CategoryController::class,'create'])
    ->name('category.create')
    ->middleware('role:administrator');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/show/{id}',[CategoryController::class,'show'])->name('category.show')->middleware('auth');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit')->middleware('auth');
Route::put('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');

Route::get('index-publisher',[PublisherController::class,'index']);

Route::get('book/show/{id}/{status}',[BookController::class,'show']);
Route::get('site/about',[SiteController::class,'about']);
Route::get('site/kontak',[SiteController::class,'kontakKami']);
Route::get('site/books',[SiteController::class,'books']);

require __DIR__.'/auth.php';
