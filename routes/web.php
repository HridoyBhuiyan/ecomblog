<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SummeryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('clientPages.home');});
Route::get('/blog', [BlogController::class, 'blogView']);
Route::get('/product', function () {return view('clientPages.productdetails');});
Route::get('/blog/1', function () {return view('clientPages.blogDetails');});
Route::view('test', 'test');


Route::prefix("/admin")->middleware('auth')->group(function (){
    Route::get("/summery", [SummeryController::class,'index']);
    Route::get('/product',[ProductController::class, 'index']);
    Route::get('/blog',[BlogController::class,'index'])->name('allPostList');
    Route::get('/footer',[FooterController::class,'index']);
    Route::get('/add', [AdminController::class],'index');
    Route::get('/meta',[SeoController::class,'index']);
    Route::get('/info',[InfoController::class,'index']);
    Route::post('/scheduledPost',[BlogController::class,'scheduledPost']);


//    blog related routes
    Route::get('/blog/new',[BlogController::class,'create'])->name('addNewBlog');
    Route::post('/postNewPostData', [BlogController::class,'postNewPostData'])->name('postNewPostData');
    Route::post('/draftPost',[BlogController::class,'draftPost']);
    Route::get('/deletePost/{id}',[BlogController::class,'deletePost'])->name('deletePost');
    Route::get('update-post/{id}', [BlogController::class,'updatePost'])->name('blogUpdate');

//    Product related Routes


//    tag related routes
    Route::get('/tags',[TagController::class, 'index']);
    Route::post('/newBlogTag',[TagController::class,'newBlogTag'])->name('newBlogTag');
    Route::post('/updateBlogTag',[TagController::class,'updateBlogTag'])->name('updateBlogTag');
    Route::get('/deleteBlogTag/{id}',[TagController::class,'deleteBlogTag']);

    Route::post('/newProductTag',[TagController::class,'newProductTag'])->name('newProductTag');
    Route::post('/updateProductTag',[TagController::class,'updateProductTag'])->name('updateProductTag');
    Route::get('/deleteProductTag/{id}',[TagController::class,'deleteProductTag'])->name('deleteProductTag');


//    Category related routes
    Route::get('/category',[CategoryController::class,'index']);

    Route::post('/newBlogCategory',[CategoryController::class,'newBlogCategory'])->name('newBlogCategory');
    Route::post('/updateBlogCategory',[CategoryController::class,'updateBlogCategory'])->name('updateBlogCategory');
    Route::get('/deleteBlogCategory/{id}',[CategoryController::class,'deleteBlogCategory']);

    Route::post('/newProductCategory',[CategoryController::class,'newProductCategory'])->name('newProductCategory');
    Route::post('/updateProductCategory',[CategoryController::class,'updateProductCategory'])->name('updateProductCategory');
    Route::get('/deleteProductCategory/{id}',[CategoryController::class,'deleteProductCategory'])->name('deleteProductCategory');

});


Route::middleware('auth')->group(function (){
    Route::get('/allAdmin',[AdminController::class,'allAdmin']);
});

Route::get('/dashboard', [SummeryController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});



require __DIR__.'/auth.php';
