<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blog;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[blog::class,'view_index_page'])->name('index');
Route::get('/about',[blog::class,'view_about_page'])->name('about');
Route::get('/contact',[blog::class,'view_contact_page'])->name('contact');
Route::post('/insert_contact_data',[blog::class,'insert_contact_data'])->name('insert_contact_data');

Route::get('/gallery',[blog::class,'view_gallery_page'])->name('gallery');
Route::get('/magazine',[blog::class,'view_magazine_page'])->name('magazine');
Route::get('/portfolio',[blog::class,'view_portfolio_page'])->name('portfolio');
Route::get('/single_portfolio',[blog::class,'view_single_page'])->name('single_portfolio');
Route::get('/standard_post',[blog::class,'view_standard_page'])->name('standard_post');
Route::get('/video',[blog::class,'view_video_page'])->name('video');


