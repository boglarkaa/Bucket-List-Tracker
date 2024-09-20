<?php

use App\Http\Controllers\BucketListController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BucketListController::class, 'index']);

Route::get("/bucketlists", [BucketListController::class, 'index']);
Route::get("/bucketlists/create", [BucketListController::class, 'create'])->middleware('auth');
Route::get('/bucketlists/{bucketlist}', [BucketListController::class, 'show'])->middleware('auth');

Route::post('/bucketlists', [BucketListController::class, 'store'])->middleware('auth');
Route::get('/search', SearchController::class)->name('search');


Route::get('/bucketlists/{bucketlist}/edit', [BucketlistController::class, 'edit']);
Route::patch('/bucketlists/{bucketlist}', [BucketlistController::class, 'update']);

Route::delete('/bucketlists/{bucketlist}', [BucketlistController::class, 'destroy']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
