<?php

namespace App\Http\Controllers;

use App\Models\DDiem_PHGModel;
use App\Models\DiaDiem_PHGModel;
use Illuminate\Http\Request;

class DiaDiem_PHGController extends Controller
{
    public function index(){
        echo "This is DiaDiem_PHG page <br />";
        $diadiem_phgs =DiaDiem_PHGModel::get();
        dd($diadiem_phgs);
    }
}
