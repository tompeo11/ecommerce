<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Bai03Controller;
use App\Http\Controllers\CateController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tong/{a}/{b}', [TestController::class,'Tong']);

Route::get('/tuyensinh', [Bai03Controller::class,'tuyensinh']);
Route::post('/tuyensinhpost', [Bai03Controller::class,'xulytuyensinh']);

Route::get('/addcate', [CateController::class,'addCate']);
Route::get('/listcate', [CateController::class,'listCate']);
Route::post('/listcatepost', [CateController::class,'listCatePost']);

