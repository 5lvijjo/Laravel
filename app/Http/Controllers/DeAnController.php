<?php

namespace App\Http\Controllers;

use App\Models\DeAnModel;
use Illuminate\Http\Request;

class DeAnController extends Controller
{
    public function index(){
        echo "This is DEAN page <br />";
        $deans = DeAnModel::get();
        foreach($deans as $dean){
            echo $dean->TenDA. "``". $dean->MaDA. "``". $dean->DDiem_DA. "``". $dean->Phong. "<br />";
        }
    }
}
