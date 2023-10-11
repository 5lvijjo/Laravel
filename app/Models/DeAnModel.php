<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeAnModel extends Model
{
    use HasFactory;
    protected $table = 'dean';
    public $timestamps = false;
    protected $primaryKey = 'MaDA';

    public function PhongBan(){
        return $this->belongsTo(PhongBanModel::class, 'Phong', 'MaPHG');
    }
    public function CongViec(){
        return $this->hasMany(CongViecModel::class, 'MaDA', 'MaDA');
    }
}
