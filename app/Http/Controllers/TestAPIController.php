<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVienModel;
use App\Models\PhongBanModel;
use App\Models\DiaDiem_PHGModel;
use App\Models\DeAnModel;
use App\Models\ThanNhanModel;
use App\Models\PhanCongModel;
use App\Models\CongViecModel;






class TestAPIController extends Controller
{
    public function hello(){
        return "Hello World!!";
    }
    public function nhanvien1(){
        return json_encode(NhanVienModel::get());
    }
    public function phongban(){
        return json_encode(PhongBanModel::get());
    }
    public function diadiem_phg(){
        return json_encode(DiaDiem_PHGModel::get());
    }
    public function dean(){
        return json_encode(DeAnModel::get());
    }
    public function thannhan(){
        return json_encode(ThanNhanModel::get());
    }
    public function phancong(){
        return json_encode(PhanCongModel::get());
    }
    public function congviec(){
        return json_encode(CongViecModel::get());
    }

    public function nhanvien($MaNV){
        return json_encode(NhanVienModel::where('MaNV', $MaNV)->first());
    }

}
