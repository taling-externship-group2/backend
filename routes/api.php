<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TestController;

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

// Route::apiResource('test', TestController::class);
// Route::apiResource('content', TestController::class);

Route::get('home/recommend', [TestController::class, 'getBestContents']);
Route::get('home/best', [TestController::class, 'getRecommendContents']);

Route::get('detail/{id}', [TestController::class, 'getContentDetail']);

Route::get('search', [TestController::class, 'getBestContents']);
