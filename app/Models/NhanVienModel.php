<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienModel extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nhanvien';
    public $timestamps = false;
    protected $primaryKey = 'MaNV';

    public function TruongPhong(){
        return $this->hasOne(PhongBanModel::class, 'TrPHG', 'MaNV');
    }
    public function PhongBan(){
        return $this->belongsTo(PhongBanModel::class, 'PHG', 'MaPHG');
    }
    public function NguoiQuanLy(){
        return $this->belongsTo(NhanVienModel::class, 'Ma_NQL', 'MaNV');
    }
    public function NhanVienQuanLy(){
        return $this->hasMany(NhanVienModel::class, 'Ma_NQL', 'MaNV');
    }
    public function ThanNhan(){
        return $this->hasMany(ThanNhanModel::class, 'Ma_Nvien', 'MaNV');
    }
    public function NhanVien(){
        return $this-> hasMany(NhanVienModel::class, 'Ma_NVien', 'MaNV');
    }
}
