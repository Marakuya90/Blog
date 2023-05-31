<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/')->name('home.redirect');

Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


Route::get('/test', TestController::class)->name('test')->middleware('token:secret');

Route::resource('/posts/{post}/comment',\App\Http\Controllers\Posts\CommentController::class)->only([
    'index', 'show'
]);


Route::fallback(function () {
    return 'Fallback';
});
