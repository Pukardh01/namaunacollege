<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\FrontendController::class, 'index']);

Route::get('contact', function () {
    return view('backend.pages.contact');
});

Route::get('about', function () {
    return view('backend.pages.about');
});

// Route::get('/contact',function(){

// });

Route::get('/product',function(){
return view('product.product');
});
Route::get('/category',[\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/category/create',[\App\Http\Controllers\CategoryController::class, 'create']);
Route::get('/category/edit/{id}',[\App\Http\Controllers\CategoryController::class, 'edit']);
Route::get('/category/delete/{id}',[\App\Http\Controllers\CategoryController::class, 'destroy']);
Route::post('/category/store',[\App\Http\Controllers\CategoryController::class, 'store']);
Route::post('/category/update/{id}',[\App\Http\Controllers\CategoryController::class, 'update']);

//brand
Route::get('/brand',[\App\Http\Controllers\BrandController::class, 'index']);
Route::get('/brand/create',[\App\Http\Controllers\BrandController::class, 'create']);
Route::get('/brand/edit/{id}',[\App\Http\Controllers\BrandController::class, 'edit']);
Route::get('/brand/delete/{id}',[\App\Http\Controllers\BrandController::class, 'destroy']);
Route::post('/brand/store',[\App\Http\Controllers\BrandController::class, 'store']);
Route::post('/brand/update/{id}',[\App\Http\Controllers\BrandController::class, 'update']);


Route::get('/product/create',[\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/product/store',[\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/product/edit/{id}',[\App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/product/update/{id}',[\App\Http\Controllers\ProductController::class, 'update']);


// Route::get('/product/list', [\App\Http\Controllers\ProductController::class, 'index']);
// Route::get('product/form',[\App\Http\Controllers\ProductController::class, 'maformho']);