<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\ThanNhanController;
use App\Http\Controllers\DeAnController;
use App\Http\Controllers\CongViecController;
use App\Http\Controllers\DDien_PHGController;
use App\Http\Controllers\PhanCongController;
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
    echo "hello";
});
Route::get('/phongban', [PhongBanController::class, 'index']);
Route::get('/nhanvien', [NhanVienController::class, 'index']);
Route::get('/thannhan', [ThanNhanController::class, 'index']);
Route::get('/dean', [DeAnController::class, 'index']);
Route::get('/congviec', [CongViecController::class, 'index']);
Route::get('/ddiem_phg', [DDien_PHGController::class, 'index']);
Route::get('/phancong', [PhanCongController::class, 'index']);
