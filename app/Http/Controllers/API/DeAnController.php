<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeAnResource;
use App\Models\DeAnModel;
use Illuminate\Http\Request;

class DeAnController extends Controller
{
    public function getAll(){
        return DeAnResource::collection(DeAnModel::all());
    }
    public function update(Request $request, $MaDA){
        $deAn = DeAnModel::where('MaDA', $MaDA)->first();
        $deAn->TenDA = $request->TenDA;
        $deAn->DDiem_DA = $request->DDiem_DA;
        $deAn->Phong = $request->Phong;
        $deAn->save();
        return json_encode($deAn);
    }
}
