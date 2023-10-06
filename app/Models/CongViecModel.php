<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViecModel extends Model
{
    use HasFactory;
    protected $table = 'congviec';
    public function DeAn(){
        return $this-> belongsTo(DeAnModel::class, 'MaDA', 'MaDA');
    }
    public function PhanCong(){
        return $this-> hasMany(PhanCongModel::class, 'MaDA', 'MaDA');
    }
    public function SoThuTu(){
        return $this-> hasMany(CongViecModel::class, 'STT', 'STT');
    }
}
