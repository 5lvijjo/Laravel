<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThanNhanResource extends JsonResource
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
            'Ma_Nvien' => $this->Ma_Nvien,
            'TenTN' => $this->TenTN,
            'Phai' => $this->Phai,
            'NgSinh' => $this->NgSinh,
            'QuanHe' => $this->QuanHe,
        ];
    }
}
