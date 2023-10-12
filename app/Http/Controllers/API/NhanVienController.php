<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NhanVienResource;
use App\Models\NhanVienModel;

use Illuminate\Http\Request;
use App\Http\Requests\NhanVienRequest;
use Validator;

class NhanVienController extends Controller
{
    public function getAll(){
        $nhanviens = NhanVienModel::all();
        return NhanVienResource::collection($nhanviens);
    }
    public function update(Request $request, $MaNV){
        $validRequest = new NhanVienRequest();
        $validData = Validator::make($request->all(),$validRequest->rules(),$validRequest->messages());
        if(!$validData->passes())
            return response()->json(['errors' => $validData->errors()]);

        $nhanVien = NhanVienModel::where('MaNV', $MaNV)->first();
        $nhanVien->HoNV = $request->HoNV;
        $nhanVien->TenLot = $request->TenLot;
        $nhanVien->TenNV = $request->TenNV;
        $nhanVien->NgSinh = $request->NgSinh;
        $nhanVien->DChi = $request->DChi;
        $nhanVien->Phai = $request->Phai;
        $nhanVien->Luong = $request->Luong;
        $nhanVien->Ma_NQL = $request->Ma_NQL;
        $nhanVien->PHG = $request->PHG;

        $nhanVien->save();

        // NhanVienModel::where('MaNV', $MaNV)->update([
        //     'HoNV' => $request->HoNV,
        //     'TenLot' => $request->TenLot,
        //     'TenNV' => $request->TenNV,
        //     'MaNV' => $request->MaNV,
        //     'NgSinh' => $request->NgSinh,
        //     'DChi' => $request->DChi,
        //     'Phai' => $request->Phai,
        //     'Luong' => $request->Luong,
        //     'Ma_NQL' => $request->Ma_NQL,
        //     'PHG' => $request->PHG,
        // ]);
        // NhanVienModel::where('MaNV', $MaNV)->first()
        return json_encode($nhanVien);
    }
}
