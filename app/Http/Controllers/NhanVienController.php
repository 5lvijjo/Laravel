<?php

namespace App\Http\Controllers;

use App\Models\NhanVienModel;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function index(){
        echo "This is NHANVIEN page <br />";
        $nhanviens = NhanVienModel::get();
        foreach($nhanviens as $nhanvien){
            echo
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "``".
            $nhanvien->MaNV. "``".
            $nhanvien->NgSinh. "``".
            $nhanvien->DChi. "``".
            $nhanvien->Phai. "``".
            $nhanvien->Luong. "``".
            $nhanvien->Ma_NQL. "``".
            $nhanvien->PHG. "<br />";
        }
    }
}
