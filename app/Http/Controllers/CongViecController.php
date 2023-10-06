<?php

namespace App\Http\Controllers;

use App\Models\CongViecModel;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    public function index(){
        echo "This is congviec page <br />";
        $congviecs = CongViecModel::get();
        foreach($congviecs as $congviec){
            echo $congviec->MaDA. "``". $congviec->STT. "``". $congviec->Ten_Cong_Viec. "<br />";
        }
    }
}
