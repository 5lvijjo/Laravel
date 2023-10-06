<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhongBanModel;

class PhongBanController extends Controller
{
    public function index(){
        echo "This is PHONGBAN page ";
        $phongbans = PhongBanModel::get();
        dd($phongbans[2]->NhanVien);

    }

}
