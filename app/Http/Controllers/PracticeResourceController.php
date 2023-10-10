<?php

namespace App\Http\Controllers;

use App\Http\Resources\CongViecResource;
use App\Http\Resources\DeAnResource;
use App\Http\Resources\DiaDiem_PHGResource;
use App\Http\Resources\NhanVienResource;
use App\Http\Resources\PhanCongResource;
use App\Http\Resources\PhongBanResource;
use App\Http\Resources\ThanNhanResource;
use App\Models\CongViecModel;
use App\Models\DeAnModel;
use App\Models\DiaDiem_PHGModel;
use App\Models\NhanVienModel;
use App\Models\PhanCongModel;
use App\Models\PhongBanModel;
use App\Models\ThanNhanModel;
use Illuminate\Http\Request;

class PracticeResourceController extends Controller
{
    public function nhanvien(){
        $nhanviens = NhanVienModel::all();
        return NhanVienResource::collection($nhanviens);
    }
    public function phongban(){
        return PhongBanResource::collection(PhongBanModel::all());
    }
    public function diadiem_phg(){
        return DiaDiem_PHGResource::collection(DiaDiem_PHGModel::all());
    }
    public function thannhan(){
        return ThanNhanResource::collection(ThanNhanModel::all());
    }
    public function dean(){
        return DeAnResource::collection(DeAnModel::all());
    }
    public function congviec(){
        return CongViecResource::collection(CongViecModel::all());
    }
    public function phancong(){
        return PhanCongResource::collection(PhanCongModel::all());
    }
}
