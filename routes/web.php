<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\BranchesController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\WordController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\MessageController;


use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\CoinsController;
use App\Http\Controllers\Admin\MessagesController;
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

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

    Route::get('/', [HomeController::class, 'index' ])->name('frontend.homepage');
    Route::get('/contact', [ContactController::class, 'index' ])->name('frontend.contact');
    Route::get('/about', [AboutController::class, 'index' ])->name('frontend.about');
    Route::get('/branches', [BranchesController::class, 'index' ])->name('frontend.branches');
    Route::get('/services', [ServicesController::class, 'index' ])->name('frontend.services');
    Route::get('/wordmaneger', [WordController::class, 'index' ])->name('frontend.wordmaneger');
    Route::post('/message/contact', [MessageController::class, 'contact' ])->name('frontend.message.contact');
});

// Route::get('/dashboard/messages', [MessagesController::class, 'index' ])->name('frontend.messages.index');


Route::get('/dashboard/login', [AuthController::class, 'login' ])->name('admin.login');
Route::post('/dashboard/do-login', [AuthController::class, 'doLogin' ])->name('admin.doLogin');


Route::middleware('adminAuth:admin')->group(function(){

    Route::get('/dashboard', [HomepageController::class, 'index' ])->name('admin.home');
    Route::get('/dashboard/logout', [AuthController::class, 'logout' ])->name('admin.logout');



    Route::get('/dashboard/coins', [CoinsController::class, 'index' ])->name('admin.coins.index');
    Route::get('/coins/edit/{id}', [CoinsController::class, 'edit' ])->name('admin.coins.edit');
    Route::post('/coins/update', [CoinsController::class, 'update' ])->name('admin.coins.update');
Route::get('/dashboard/messages', [MessagesController::class, 'index' ])->name('admin.messages.index');




});
