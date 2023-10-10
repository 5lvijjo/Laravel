<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhongBanResource extends JsonResource
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
            'TenPHG' => $this->TenPHG,
            'MaPHG' => $this->MaPHG,
            'TrPHG' => $this->TrPHG,
            'Ng_NhanChuc' => $this->Ng_NhanChuc,
        ];
    }
}
