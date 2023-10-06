<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhongBanModel;

class PhongBanController extends Controller
{
    public function index(){
        echo "This is PHONGBAN page <br />";
        $phongbans = PhongBanModel::get();
        foreach($phongbans as $phongban){
            echo
            $phongban->TenPHG. "``".
            $phongban->MaPHG. "``".
            $phongban->TrPHG. "``".
            $phongban->Ng_NhanChuc. "<br />";
        }

    }

}
