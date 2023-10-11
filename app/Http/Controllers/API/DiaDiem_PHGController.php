<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiaDiem_PHGResource;
use App\Models\DiaDiem_PHGModel;
use Illuminate\Http\Request;

class DiaDiem_PHGController extends Controller
{
    public function getAll(){
        return DiaDiem_PHGResource::collection(DiaDiem_PHGModel::all());
    }
}
