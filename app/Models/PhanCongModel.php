<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanCongModel extends Model
{
    use HasFactory;
    protected $table = 'phancong';
    public function CongViec(){
        return $this-> belongsTo(CongViecModel::class, 'MaDA', 'MaDA');
    }
    public function SoThuTu(){
        return $this-> belongsTo(CongViecModel::class, 'STT', 'STT');
    }
    public function NhanVien(){
        return $this-> belongsTo(NhanVienModel::class, 'Ma_NVien', 'MaNV');
    }

}
