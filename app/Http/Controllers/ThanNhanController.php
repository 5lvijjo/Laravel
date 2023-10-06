<?php

namespace App\Http\Controllers;

use App\Models\ThanNhanModel;
use Illuminate\Http\Request;

class ThanNhanController extends Controller
{
    public function index(){
        echo "This is THANNHAN page";
        $thannhans = ThanNhanModel::get();
        dd($thannhans);
    }
}
