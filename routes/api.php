<?php


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


Route::get('/list',[App\Http\Controllers\API\QuoteListController::class,'QuoteList'])->name('list'); //Рут списка цитат с пагинацией
Route::post('/post',[App\Http\Controllers\API\PostQuoteController::class,'PostQuote']);//Рут добавления новой цитаты
Route::get('/tags',[App\Http\Controllers\API\TagListController::class,'TagList']);//Рут списка тэгов