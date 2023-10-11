<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhanCongResource;
use App\Models\PhanCongModel;
use Illuminate\Http\Request;

class PhanCongController extends Controller
{
    public function getAll(){
        return PhanCongResource::collection(PhanCongModel::all());
    }
    public function update(Request $request, $Ma_NVien, $MaDA, $STT){
        PhanCongModel::where([
                'Ma_NVien' => $Ma_NVien,
                'MaDA' => $MaDA,
                'STT' => $STT
            ])
            ->update([
                'ThoiGian' => $request->ThoiGian
            ]);
        $phanCong = PhanCongModel::where([
                'Ma_NVien' => $Ma_NVien,
                'MaDA' => $MaDA,
                'STT' => $STT
            ])
            ->first();
            return json_encode($phanCong);
    }
}
