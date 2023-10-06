<?php

namespace App\Http\Controllers;

use App\Models\PhanCongModel;
use Illuminate\Http\Request;

class PhanCongController extends Controller
{
    public function index(){
        echo "This is PHANCONG page <br />";
        $phancongs = PhanCongModel::get();
        foreach($phancongs as $phancong){
            echo $phancong->Ma_NVien. "``". $phancong->MaDA. "``". $phancong->STT. "``". $phancong->ThoiGian. "<br />";
        }
    }
}
