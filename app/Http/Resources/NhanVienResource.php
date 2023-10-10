<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class NhanVienResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'HoNV' => $this->HoNV,
            'TenLot' => $this->TenLot,
            'TenNV' => $this->TenNV,
            'MaNV' => $this->MaNV,
            'NgSinh' => $this->NgSinh,
            'DChi' => $this->DChi,
            'Phai' => $this->Phai,
            'Luong' => $this->Luong,
            'Ma_NQL' => $this->Ma_NQL,
            'PHG' => $this->PHG,
        ];
    }
}
