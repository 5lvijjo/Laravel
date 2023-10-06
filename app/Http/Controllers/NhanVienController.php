<?php

namespace App\Http\Controllers;

use App\Models\NhanVienModel;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function index(){
        echo "This is NHANVIEN page";
        $nhanviens = NhanVienModel::get();
        dd($nhanviens);
    }
}
