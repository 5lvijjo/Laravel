<?php

namespace App\Http\Controllers;

use App\Models\PhanCongModel;
use Illuminate\Http\Request;

class PhanCongController extends Controller
{
    public function index(){
        echo "This is PHANCONG page";
        $phancongs = PhanCongModel::get();
        dd($phancongs);
    }
}
