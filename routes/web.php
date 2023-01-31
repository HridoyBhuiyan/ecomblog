<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SummeryController;
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

Route::get('/', function () { return view('clientPages.home');});
Route::get('/blog', [BlogController::class, 'blogView']);
Route::get('/product', function () {return view('clientPages.productdetails');});
Route::get('/blog/1', function () {return view('clientPages.blogDetails');});
Route::view('test', 'test');


Route::prefix("/admin")->middleware('auth')->group(function (){
    Route::get("/summery", [SummeryController::class,'index']);
    Route::get('/product',[ProductController::class, 'index']);
//    blog related routes
    Route::get('/blog',[BlogController::class,'index']);
    Route::get('/blog/new',[BlogController::class,'create']);


    Route::get('/footer',[FooterController::class,'index']);
    Route::get('/add', [AdminController::class],'index');
    Route::get('/meta',[SeoController::class,'index']);
    Route::get('/info',[InfoController::class,'index']);
});


Route::middleware('auth')->group(function (){
    Route::get('/allAdmin',[AdminController::class,'allAdmin']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
