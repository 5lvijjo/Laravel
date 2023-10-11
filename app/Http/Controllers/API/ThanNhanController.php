<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ThanNhanResource;
use App\Models\ThanNhanModel;
use Illuminate\Http\Request;

class ThanNhanController extends Controller
{
    public function getAll(){
        return ThanNhanResource::collection(ThanNhanModel::all());
    }
    public function update(Request $request, $Ma_Nvien, $TenTN){
        ThanNhanModel::where([
                'Ma_Nvien' => $Ma_Nvien,
                'TenTN'=>  $TenTN
            ])
            ->update([
                "Phai" => $request->Phai,
                "NgSinh" => $request->NgSinh,
                "QuanHe" => $request->QuanHe,
            ]);
        $thanNhan = ThanNhanModel::where([
                'Ma_Nvien' => $Ma_Nvien,
                'TenTN'=>  $TenTN
            ])
            ->first();

        return json_encode($thanNhan);
    }
}
