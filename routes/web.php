<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\servicePageController;
use App\Http\Controllers\contactController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexcontroller::class ,'index'])->name('fontindex');
Route::get('/dash', [PagesController::class ,'dash'])->name('dashboard')->middleware('auth');
Route::get('/main', [MainPageController::class ,'main'])->name('maindashboard')->middleware('auth');
Route::put('/main', [MainPageController::class ,'update'])->name('dashboardUpdate')->middleware('auth');
Route::get('/about', [PagesController::class ,'about'])->middleware('auth');
Route::get('/service', [PagesController::class ,'service'])->middleware('auth');
Route::get('/service/create', [servicePageController::class ,'index'])->name('serviceCreate')->middleware('auth');
Route::post('/service/create', [servicePageController::class ,'store'])->name('serviceStore')->middleware('auth');
Route::get('/service/create/list', [servicePageController::class ,'indexlist'])->name('serviceCreate.list')->middleware('auth');
Route::get('/service/edit/{id}', [servicePageController::class ,'edit'])->name('serviceStore.edit')->middleware('auth');
Route::post('/service/update/{id}', [servicePageController::class ,'update'])->name('serviceStore.update')->middleware('auth');
Route::get('/service/delete/{id}', [servicePageController::class ,'delete'])->name('serviceStore.delete')->middleware('auth');
Route::get('/contact', [PagesController::class ,'contact'])->name('contact')->middleware('auth');
Route::get('/portfolio', [PagesController::class ,'portfolio'])->middleware('auth');
Route::post('/contact',[contactController::class, 'store'])->name('contact.store')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
