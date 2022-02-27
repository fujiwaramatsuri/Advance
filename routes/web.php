<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceController;

// お問い合わせ入力ページ
Route::get('/', [AdvanceController::class,'input']);

// 確認ページ
Route::get('/Advance/confirm', [AdvanceController::class,'confirm']);



// 完了ページ
Route::get('/complete', [AdvanceController::class,';complete']);

//検索結果を表示する
// Route::get('/serch',[AdvanceController::class,';serch']);

//ユーザー一覧と検索画面
// Route::get('/',[AdvanceController::class,';index']);
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/complete', function () {
    return view('search');
});