<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\PackagesController;
use App\Http\Controllers\frontend\GalleryController;

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PrivacyPolicyController;
use App\Http\Controllers\frontend\TermConditionsPolicyController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\BlogController;
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

Route::get('/',[HomeController::class, 'index']);

Route::get('/about-us',[AboutController::class, 'index']);

Route::get('/our-service',[ServiceController::class, 'index']);
Route::get('/our-service/premium-matrimony-service',[ServiceController::class,'premium_matrimony_service']);
Route::get('/our-service/fastrack-matrimony-service',[ServiceController::class,'fastrack_matrimony_service']);
Route::get('/our-service/personalized-matrimony-service',[ServiceController::class,'personalized_matrimony_service']);
Route::get('/our-service/gold-matrimony-service',[ServiceController::class,'gold_matrimony_service']);


Route::get('/our-packages',[PackagesController::class, 'index']);

Route::get('/our-gallery',[GalleryController::class, 'index']);

Route::get('/blog',[BlogController::class, 'index']);
Route::get('/blog/blog-details',[BlogController::class,'blog_details']);
Route::get('/blog/blog-details-2',[BlogController::class,'blog_details_2']);
Route::get('/blog/blog-details-3',[BlogController::class,'blog_details_3']);
Route::get('/blog/blog-details-4',[BlogController::class,'blog_details_4']);

Route::get('/contact-us',[ContactController::class, 'index']); 
Route::post('/query/save',[ContactController::class, 'query'])->name('contact.save'); 

Route::get('/privacy-and-policy',[PrivacyPolicyController::class, 'index']);
Route::get('/term-and-conditions',[TermConditionsPolicyController::class, 'index']);
Route::get('/faq',[FaqController::class, 'index']);
