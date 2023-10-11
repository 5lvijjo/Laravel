<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


class CongViecModel extends Model
{
    use HasFactory;
    protected $table = 'congviec';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['MaNV', 'STT'];

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
