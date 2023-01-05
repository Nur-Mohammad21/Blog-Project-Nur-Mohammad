<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\MyPortfolioController;
use App\Http\Controllers\Front\CommentController;

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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/detail/{id}',[HomeController::class,'detail'])->name('detail');
Route::get('/member/login',[HomeController::class,'login'])->name('member.login');
Route::post('/member/login-check',[HomeController::class,'loginCheck'])->name('member.login.check');
Route::post('/member/register',[HomeController::class,'registerMember'])->name('member.register');
Route::get('/member/logout',[HomeController::class,'logout'])->name('member.logout');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');


//Route::get('/comment',[CommentController::class,'index'])->name('index');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',  [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category',  [CategoryController::class,'index'])->name('category.index');
    Route::post('/create-category',  [CategoryController::class,'create'])->name('category.create');
    Route::get('/manage-category',  [CategoryController::class,'manage'])->name('category.manage');
    Route::get('/edit-category/{id}',  [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update-category/{id}',  [CategoryController::class,'update'])->name('category.update');
    Route::get('/delete-category/{id}',  [CategoryController::class,'delete'])->name('category.delete');
    Route::get('/update-category-status/{id}',  [CategoryController::class,'updateStatus'])->name('category.status');
    //post controller
    Route::get('/add-post',  [PostController::class,'index'])->name('post.index');
    Route::post('/create-post',  [PostController::class,'create'])->name('post.create');
    Route::get('/manage-post',  [PostController::class,'manage'])->name('post.manage');
    Route::get('/edit-post/{id}',  [PostController::class,'edit'])->name('post.edit');
    Route::post('/update-post/{id}',  [PostController::class,'update'])->name('post.update');
    Route::get('/delete-post/{id}',  [PostController::class,'delete'])->name('post.delete');
    Route::get('/update-post-status/{id}',  [PostController::class,'updateStatus'])->name('post.status');

    // Slider Controller
    Route::get('/add-slider',  [SliderController::class,'index'])->name('slider.index');
    Route::post('/create-slider',  [SliderController::class,'create'])->name('slider.create');
    Route::get('/manage-slider',  [SliderController::class,'manage'])->name('slider.manage');
    Route::get('/edit-slider/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/update-slider/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('/delete-slider/{id}',[SliderController::class,'delete'])->name('slider.delete');
    Route::get('/update-slider-status/{id}',[SliderController::class,'updateStatus'])->name('slider.status');

    // section Controller {home body }
    Route::get('/add-section',[SectionController::class,'index'])->name('section.index');
    Route::post('/create-section',[SectionController::class,'create'])->name('section.create');
    Route::get('/manage-section',[SectionController::class,'manage'])->name('section.manage');
    Route::get('/edit-section/{id}',[SectionController::class,'edit'])->name('section.edit');
    Route::post('/update-section{id}',[SectionController::class,'update'])->name('section.update');
    Route::get('/update-section-status/{id}',[SectionController::class,'updateStatus'])->name('section.status');
    // Member Controller
    Route::get('/add-member',[MemberController::class,'index'])->name('member.index');
    Route::post('/create-member',[MemberController::class,'create'])->name('member.create');
    Route::get('/manage-member',[MemberController::class,'manage'])->name('member.manage');
    Route::get('/edit-member/{id}',[MemberController::class,'edit'])->name('member.edit');
    Route::post('/update-member',[MemberController::class,'update'])->name('member.update');
    Route::get('/delete-member{id}',[MemberController::class,'delete'])->name('member.delete');
    //Portfolio Controller
    Route::get('/add-portfolio',[MyPortfolioController::class,'index'])->name('portfolio.index');
    Route::post('/create-portfolio',[MyPortfolioController::class,'create'])->name('portfolio.create');
    Route::get('/manage-portfolio',[MyPortfolioController::class,'manage'])->name('portfolio.manage');
    Route::get('/edit-portfolio/{id}',[MyPortfolioController::class,'edit'])->name('portfolio.edit');
    Route::post('/update-portfolio/{id}',[MyPortfolioController::class,'update'])->name('portfolio.update');
    Route::get('/delete-portfolio/{id}',[MyPortfolioController::class,'delete'])->name('portfolio.delete');
});


