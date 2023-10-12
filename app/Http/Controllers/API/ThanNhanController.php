<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThanNhanRequest;
use App\Http\Resources\ThanNhanResource;
use App\Models\ThanNhanModel;
use Illuminate\Http\Request;
use Validator;

class ThanNhanController extends Controller
{
    public function getAll(){
        return ThanNhanResource::collection(ThanNhanModel::all());
    }
    public function update(Request $request, $Ma_Nvien, $TenTN){
        $validRequest = new ThanNhanRequest();
        $validData = Validator::make($request->all(),$validRequest->rules(),$validRequest->messages());
        if(!$validData->passes())
            return response()->json(['errors' => $validData->errors()]);
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
