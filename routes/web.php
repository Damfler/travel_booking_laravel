<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\EventControllers;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('events', [MainController::class, 'events'])->name('events');
Route::get('rooms', [MainController::class, 'rooms'])->name('rooms');
Route::get('reservation', [MainController::class, 'reservation'])->name('reservation');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_process', [AuthController::class, 'login'])->name('login_process');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('home', [AdminController::class, 'index'])->name('home');

    Route::get('rooms', [AdminController::class, 'rooms'])->name('rooms');
    Route::get('rooms/add', [RoomsController::class, 'create'])->name('rooms.add');
    Route::post('rooms/store', [RoomsController::class, 'store'])->name('rooms.store');
    Route::get('rooms/edit/{id}', [RoomsController::class, 'edit'])->name('rooms.edit');
    Route::get('rooms/update/{id}', [RoomsController::class, 'update'])->name('rooms.update');
    Route::get('rooms/remove/{id}', [RoomsController::class, 'destroy'])->name('rooms.remove');

    Route::get('comment', [AdminController::class, 'comment'])->name('comment');
    Route::get('comment/add', [CommentsController::class, 'create'])->name('comment.add');
    Route::post('comment/store', [CommentsController::class, 'store'])->name('comment.store');
    Route::get('comment/edit/{id}', [CommentsController::class, 'edit'])->name('comment.edit');
    Route::get('comment/update/{id}', [CommentsController::class, 'update'])->name('comment.update');
    Route::get('comment/remove/{id}', [CommentsController::class, 'destroy'])->name('comment.remove');

    Route::get('news', [AdminController::class, 'news'])->name('news');
    Route::get('news/add', [EventControllers::class, 'create'])->name('news.add');
    Route::post('news/store', [EventControllers::class, 'store'])->name('news.store');
    Route::get('news/edit/{id}', [EventControllers::class, 'edit'])->name('news.edit');
    Route::get('news/update/{id}', [EventControllers::class, 'update'])->name('news.update');
    Route::get('news/remove/{id}', [EventControllers::class, 'destroy'])->name('news.remove');
});
