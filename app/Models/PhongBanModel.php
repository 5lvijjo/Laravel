<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBanModel extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'phongban';
    public function TruongPhong(){
        return $this->belongsTo(NhanVienModel::class, 'TrPHG', 'MaNV');
    }
    public function NhanVien(){
        return $this->hasMany(NhanVienModel::class, 'PHG', 'MaPHG');
    }
    public function DiaDiem(){
        return $this-> hasMany(DiaDiem_PHGModel::class, 'MaPHG', 'MaPHG');
    }
    public function DeAn(){
        return $this-> hasMany(DeAnModel::class, 'Phong', 'MaPHG');
    }
}
