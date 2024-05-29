<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PortfoliodetailController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/portfoliodetail', [PortfoliodetailController::class,'portfoliodetail']);
Route::get('/portfoliodetail', [PortfoliodetailController::class, 'portfoliodetail']);

Route::get('/services', [HomeController::class, 'services']);
Route::get('/blog', [HomeController::class, 'blog']);
// Route::get('blogs/{id}', [HomeController::class, 'show'])->name('blogs.show');

// Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');

Route::get('/single', [HomeController::class, 'single']);

Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('sliders', SliderController::class);

Route::resource('services', ServiceController::class);

Route::resource('testimonials', TestimonialController::class);

Route::resource('portfolios', PortfolioController::class);

Route::resource('portfoliodetails', PortfoliodetailController::class);

Route::resource('clients', ClientController::class);

Route::resource('teams', TeamController::class);

Route::resource('blogs', BlogController::class);

Route::resource('partners', PartnerController::class);

Route::resource('abouts', AboutController::class);

Route::resource('contacts', ContactController::class);
    
Route::get('contact', [ContactController::class, 'index']);

Route::put('contact/{id}', [ContactController::class, 'update']);

Route::get('about', [AboutController::class, 'index']);

Route::put('about/{id}', [AboutController::class, 'update']);
});
