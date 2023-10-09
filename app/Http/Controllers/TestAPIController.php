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
        $nhanvien1s = NhanVienModel::get();
        return json_encode($nhanvien1s);
    }
    public function phongban(){
        $phongbans = PhongBanModel::get();
        return json_encode($phongbans);
    }
    public function diadiem_phg(){
        $diadiem_phgs = DiaDiem_PHGModel::get();
        return json_encode($diadiem_phgs);
    }
        public function dean(){
        $deans = DeAnModel::get();
        return json_encode($deans);
    }
        public function thannhan(){
        $thannhans = ThanNhanModel::get();
        return json_encode($thannhans);
    }
        public function phancong(){
        $phancongs = PhanCongModel::get();
        return json_encode($phancongs);
    }
    public function congviec(){
        $congviecs = CongViecModel::get();
        return json_encode($congviecs);
    }

    public function nhanvien($MaNV){
        $nhanviens = NhanVienModel::where('MaNV', $MaNV)->first();
        return json_encode($nhanviens);
    }

}
