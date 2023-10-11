<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhongBanResource;
use App\Models\PhongBanModel;
use Illuminate\Http\Request;

class PhongBanController extends Controller
{
    public function getAll(){
        return PhongBanResource::collection(PhongBanModel::all());
    }
    public function update(Request $request, $MaPHG){
        // PhongBanModel::where('MaPHG', $MaPHG)->update([
        //     "TenPHG" => $request->TenPHG,
        //     "TrPHG" => $request->TrPHG,
        //     "Ng_NhanChuc" => $request->Ng_NhanChuc,
        // ]);
        $phongBan = PhongBanModel::where('MaPHG', $MaPHG)->first();
        $phongBan->TenPHG = $request->TenPHG;
        $phongBan->TrPHG = $request->TrPHG;
        $phongBan->Ng_NhanChuc = $request->Ng_NhanChuc;
        $phongBan->TruongPhong->TenNV = "Khanh";

        foreach($phongBan->NhanViens as $nhanVien){
            $nhanVien->TenNV = "Quang";
            $nhanVien->save();
        }
        $phongBan->TruongPhong->save();
        $phongBan->save();

        return json_encode($phongBan);
    }

}
