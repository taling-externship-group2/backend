<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\WishController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['cors'])->group(function(){
    Route::get('home/recommend', [TestController::class, 'getRecommendContents']);
    Route::get('home/best', [TestController::class, 'getBestContents']);

    Route::get('detail/{id}', [TestController::class, 'getContentDetail']);

    Route::get('search', [TestController::class, 'getSeach']);

    Route::post('wish', [WishController::class, 'makeWish']);
    // Route::get('wish', [WishController::class, 'makeWish']);
});