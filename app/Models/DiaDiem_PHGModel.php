<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaDiem_PHGModel extends Model
{
    use HasFactory;
    protected $table = 'diadiem_phg';
    public function PhongBan(){
        return $this-> belongsTo(PhongBanModel::class, 'MaPHG', 'MaPHG');
    }

}
