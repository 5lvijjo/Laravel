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
        foreach($diadiem_phgs as $diadiem_phg){
            echo $diadiem_phg->MaPHG. "``". $diadiem_phg->DiaDiem. "<br />";
        }
    }
}
