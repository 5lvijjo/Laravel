<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhongBanModel;


class PhongBanController extends Controller
{
    public function index(){
        echo "This is PHONGBAN page <br />";
        $phongbans = PhongBanModel::get();
                    // dd($phongbans[2]->DiaDiems[0]->PhongBan->NhanVien[2]->ThanNhan[0]->NhanVien);
        foreach($phongbans as $phongban){
            echo
            $phongban->TenPHG. "``".
            $phongban->MaPHG. "``".
            $phongban->TrPHG. "``".
            $phongban->Ng_NhanChuc. "<br />";
            echo $phongban->TenPHG. "``";
            foreach($phongban->DiaDiems as $diaDiem){
                echo $diaDiem->DiaDiem. "``";
            }
            echo "<br />";
            // dd($phongban->DiaDiem);
        }

    }

}
