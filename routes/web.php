<?php


use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/',             IndexController::class)->name('post.index');
    Route::get('/create',       CreateController::class)->name('post.create');
    Route::post('/',            StoreController::class)->name('post.store');
    Route::get('/{post}',       ShowController::class)->name('post.show');
    Route::get('/{post}/edit',  EditController::class)->name('post.edit');
    Route::patch('/{post}',     UpdateController::class)->name('post.update');
    Route::delete('/{post}',    DestroyController::class)->name('post.delete');
});




//Route::get('/update', [PostController::class, 'update']);
//
//Route::get('/delete', [PostController::class, 'delete']);
//
//Route::get('/restore', [PostController::class, 'restore']);
//
//Route::get('/first_or_create', [PostController::class, 'firstOrCreate']);
//
//Route::get('/update_or_create', [PostController::class, 'updateOrCreate']);
