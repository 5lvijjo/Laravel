<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CongViecResource;
use App\Models\CongViecModel;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    public function getAll(){
        return CongViecResource::collection(CongViecModel::all());
    }
    public function update(Request $request, $MaDA, $STT){
        CongViecModel::where([
                'MaDA'=> $MaDA,
                'STT'=> $STT
            ])
            ->update([
                'Ten_Cong_Viec' => $request->Ten_Cong_Viec
            ]);

        $congViec = CongViecModel::where([
                'MaDA'=> $MaDA,
                'STT'=> $STT
            ])
            ->first();

        return json_encode($congViec);
    }
}
