<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ManagerController;

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



Route::get('/', [FormController::class, 'index']);
Route::post('/', [FormController::class, 'checkPage1'])->name('checkPage1');
Route::get('/page2', [FormController::class, 'page2'])->name('page2');
Route::get('/google', [FormController::class, 'google'])->name('google');
Route::post('/page2', [FormController::class, 'checkPage2'])->name('checkPage2');
Route::post('/google', [FormController::class, 'checkGoogle'])->name('checkGoogle');
Route::get('/thanks', [FormController::class, 'thanks'])->name('thanks');
Route::get('/googleThanks', [FormController::class, 'googleThanks'])->name('googleThanks');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ログインユーザー以上
Route::group(['middleware' => 'auth'], function () {
    Route::get('manager/', [ManagerController::class, 'index'])->name('manager.index');
});

