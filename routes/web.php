<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\ArticleController;
use \App\Http\Controllers\ClassificationController;
use \App\Http\Controllers\UserController;

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

Auth::routes();

Auth::routes(['verify' => true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('privacy-policy', [App\Http\Controllers\HomeController::class, 'index'])->name('privacy-policy');
Route::get('terms-and-conditions', [App\Http\Controllers\HomeController::class, 'index'])->name('terms-and-conditions');

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])
        ->middleware('verified')
        ->name('profile.index');
    Route::get('show/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('add', [ProfileController::class, 'add'])
        ->middleware('verified')
        ->name('profile.add');
    Route::post('submit', [ProfileController::class, 'submit'])
        ->middleware('verified')
        ->name('profile.submit');
    Route::get('download/{id}', [ProfileController::class, 'downloadFile'])
        ->middleware('verified')
        ->name('profile.download');
});

Route::get('cookies', function () {
    return view('cookies');
})->name('cookies');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::prefix('article')->group(function () {
    Route::get('search', [ArticleController::class, 'search'])->name('article.search');
    Route::post('review/{id}', [ArticleController::class, 'review'])
        ->middleware('verified')
        ->name('article.review');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::prefix('articles')->group(function () {
        Route::get('index', [ArticleController::class, 'adminIndex'])->name('admin.articles.index');
        Route::post('update/{id}', [ArticleController::class, 'adminArticleUpdate'])->name('admin.articles.update');
        Route::get('show/{id}', [ArticleController::class, 'adminArticleShow'])->name('admin.articles.show');
    });

    Route::prefix('classifications')->group(function () {
        Route::get('index', [ClassificationController::class, 'index'])->name('admin.classifications.index');
        Route::get('show/{id}', [ClassificationController::class, 'show'])->name('admin.classifications.show');
        Route::get('create', [ClassificationController::class, 'create'])->name('admin.classifications.create');
        Route::post('store', [ClassificationController::class, 'store'])->name('admin.classifications.store');
        Route::get('edit/{id}', [ClassificationController::class, 'edit'])->name('admin.classifications.edit');
        Route::put('update/{id}', [ClassificationController::class, 'update'])->name('admin.classifications.update');
        Route::delete('delete/{id}', [ClassificationController::class, 'destroy'])->name('admin.classifications.delete');
        Route::put('restore/{id}', [ClassificationController::class, 'restore'])->name('admin.classifications.restore');
    });

    Route::prefix('account')->group(function () {
        Route::get('changePassword', [UserController::class, 'changeAdminPassword'])->name('admin.account.changePassword');
        Route::put('changePassword', [UserController::class, 'updateAdminPassword'])->name('admin.account.updatePassword');
    });
});

Route::get('admin/login', [UserController::class, 'adminLogin'])->name('admin.account.login');


