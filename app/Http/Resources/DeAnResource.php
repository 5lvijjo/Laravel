<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeAnResource extends JsonResource
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
            'TenDA' => $this->TenDA,
            'MaDA' => $this->MaDA,
            'DDiem_DA' => $this->DDiem_DA,
            'Phong' => $this->Phong,
        ];
    }
}
