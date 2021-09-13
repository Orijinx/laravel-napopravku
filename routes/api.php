<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list',[App\Http\Controllers\API\QuoteListController::class,'QuoteList'])->name('list');
Route::post('/post',[App\Http\Controllers\API\PostQuoteController::class,'PostQuote']);
Route::get('/tags',[App\Http\Controllers\API\TagListController::class,'TagList']);