<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanNhanModel extends Model
{
    use HasFactory;
    protected $table = 'thannhan';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['Ma_Nvien', 'TenTN'];

    public function NhanVien(){
        return $this->belongsTo(NhanVienModel::class, 'Ma_Nvien', 'MaNV');
    }
}
