<?php

namespace App\Http\Controllers;

use App\Models\CongViecModel;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    public function index(){
        echo "This is congviec page";
        $congviecs = CongViecModel::get();
        dd($congviecs);
    }
}
