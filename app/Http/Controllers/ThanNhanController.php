<?php

namespace App\Http\Controllers;

use App\Models\ThanNhanModel;
use Illuminate\Http\Request;

class ThanNhanController extends Controller
{
    public function index(){
        echo "This is THANNHAN page <br />";
        $thannhans = ThanNhanModel::get();
        foreach($thannhans as $thannhan){
            echo
            $thannhan->Ma_Nvien. "``".
            $thannhan->TenTN. "``".
            $thannhan->Phai. "``".
            $thannhan->NgSinh."``".
            $thannhan->QuanHe. "<br />";
        }
    }
}
