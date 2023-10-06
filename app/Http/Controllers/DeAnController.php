<?php

namespace App\Http\Controllers;

use App\Models\DeAnModel;
use Illuminate\Http\Request;

class DeAnController extends Controller
{
    public function index(){
        echo "This is DEAN page";
        $deans = DeAnModel::get();
        dd($deans);
    }
}
