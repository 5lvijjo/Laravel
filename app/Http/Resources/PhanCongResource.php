<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhanCongResource extends JsonResource
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
            'Ma_NVien' => $this->Ma_NVien,
            'MaDA' => $this->MaDA,
            'STT' => $this->STT,
            'ThoiGian' => $this->ThoiGian,
        ];
    }
}
