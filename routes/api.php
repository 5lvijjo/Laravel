<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestAPIController;
use App\Http\Controllers\APIPracticeSelectLaravelController;


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
Route::post('/hello', [TestAPIController::class, 'hello']);
Route::get('/nhan_vien1', [TestAPIController::class, 'nhanvien1']);
Route::get('/phong_ban', [TestAPIController::class, 'phongban']);
Route::get('/dia_diem_phg', [TestAPIController::class, 'diadiem_phg']);
Route::get('/de_an', [TestAPIController::class, 'dean']);
Route::get('/than_nhan', [TestAPIController::class, 'thannhan']);
Route::get('/phan_cong', [TestAPIController::class, 'phancong']);
Route::get('/cong_viec', [TestAPIController::class, 'congviec']);
Route::get('/nhan_vien/{MaNV}', [TestAPIController::class, 'nhanvien']);

#Viết API dữ liệu theo yêu cầu bài 3.1 Practice MySQL
Route::get('/bt1', [APIPracticeSelectLaravelController::class, 'bT1']);
Route::get('/bt2', [APIPracticeSelectLaravelController::class, 'bT2']);
Route::get('/bt3', [APIPracticeSelectLaravelController::class, 'bT3']);
Route::get('/bt4', [APIPracticeSelectLaravelController::class, 'bT4']);
Route::get('/bt8', [APIPracticeSelectLaravelController::class, 'bT8']);
Route::get('/bt9', [APIPracticeSelectLaravelController::class, 'bT9']);
Route::get('/bt11', [APIPracticeSelectLaravelController::class, 'bT11']);
Route::get('/bt12', [APIPracticeSelectLaravelController::class, 'bT12']);
Route::get('/bt13', [APIPracticeSelectLaravelController::class, 'bT13']);
Route::get('/bt14', [APIPracticeSelectLaravelController::class, 'bT14']);
Route::get('/bt16', [APIPracticeSelectLaravelController::class, 'bT16']);
Route::get('/bt17', [APIPracticeSelectLaravelController::class, 'bT17']);
Route::get('/bt18', [APIPracticeSelectLaravelController::class, 'bT18']);



