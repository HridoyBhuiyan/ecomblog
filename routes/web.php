<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SummeryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class,'allProductList']);
Route::get('/blog', [BlogController::class, 'blogView']);
Route::get('/blog/1', function () {return view('clientPages.blogDetails');});
Route::view('/test/a', 'clientPages.test.test');


Route::view('/about-us', 'clientPages.aboutUs');
Route::view('/contact', 'clientPages.contact');
Route::view('/privacy-policy', 'clientPages.privacyPolicy');
Route::view('/advertisement', 'clientPages.advert');
Route::view('/dmca', 'clientPages.dmca');


Route::get('/category/{slug}', [CategoryController::class,'categoryPage'])->name('category');

Route::prefix("/admin")->middleware('auth')->group(function (){
    Route::get("/summery", [SummeryController::class,'index']);
    Route::get('/product',[ProductController::class, 'index']);
    Route::get('/blog',[BlogController::class,'index'])->name('allPostList');
    Route::get('/footer',[FooterController::class,'index']);

    Route::get('/media',[MediaController::class,'index'])->name('adminMedia');
    Route::post("/postMedia",[MediaController::class,'postMedia'])->name('postMedia');
    Route::get('/deleteMedia/{id}',[MediaController::class,'deleteMedia'])->name('deleteMedia');
    Route::get('/comment',[CommentController::class,'index']);

    Route::get('/add',[AdminController::class, 'index']);

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

    Route::get('add-product',[ProductController::class,'addNewProduct'])->name('addNewProduct');
    Route::post('createNewProduct',[ProductController::class,'createNewProduct'])->name('createNewProduct');
    Route::get('update-product/{id}',[ProductController::class,'updateProductPage'])->name('updateProductPage');
    Route::post('updateProduct',[ProductController::class,'updateProduct'])->name('updateProduct');
    Route::get('deleteProduct/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');

//    Comment related Routes

    Route::post('postComment',[CommentController::class,'postComment'])->name('postComment')->withoutMiddleware('auth');

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
    Route::get('/deleteBlogCategory/{id}',[CategoryController::class,'deleteBlogCategory'])->name('deleteBlogCategory');

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
Route::get('/showAllProductCategory', [CategoryController::class,'showAllProductCategory']);


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});

Route::get('/create-symlink', function (){
    symlink(storage_path('/app/public'), public_path('storage'));
    echo "Symlink Created. Thanks";
});

Route::get('/clear-config', function (){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    echo "Config have cleared";
});

//xml sitemap related routes
Route::get('/sitemap',[SitemapController::class,'index']);


//Feed related Routes from here
Route::get('/feed',[FeedController::class,'homeFeed']);
Route::get('/{slug}/feed',[FeedController::class,'postFeed']);
Route::get('/blog/feed',[FeedController::class,'blogFeed']);
Route::get('/category/{slug}/feed',[FeedController::class,'categoryFeed']);
Route::get('/sitemap.xml',[SitemapController::class,'XMLsitemap']);

Route::get('/product-sitemap.xml',[SitemapController::class,'XMLProductSitemap']);
Route::get('/post-sitemap.xml',[SitemapController::class,'XMLPostSitemap']);
Route::get('/pages-sitemap.xml',[SitemapController::class,'XMLPagesitemap']);

require __DIR__.'/auth.php';

Route::get('/{slug}', [ProductController::class, 'singleProduct']);

//Route::get('/{slug}',[BlogController::class,'showSinglePost']);

