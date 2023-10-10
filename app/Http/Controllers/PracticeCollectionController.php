<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Models\PhongBanModel;
use App\Models\DiaDiem_PHGModel;
use App\Models\NhanVienModel;
use App\Models\ThanNhanModel;
use App\Models\DeAnModel;
use App\Models\CongViecModel;
use App\Models\PhanCongModel;


class PracticeCollectionController extends Controller
{
    public function index(){
        return collect([1, 2, 3])->all();
    }
    public function add(){
        return json_encode(collect([1, 2, 3])->all());
    }
    public function count(){
        $collections = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        return json_encode($collections->count());
    }
    public function avg(){
        $collections = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        return json_encode($collections->avg());
    }
    public function chunk(){
        $collections = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        return json_encode($collections->chunk(5)->all());
    }
    public function chunkWhile(){
        $collection = collect(str_split('ABCDABCD'));
        $chunks = $collection->chunkWhile(function (string $value, int $key, Collection $chunks){
            return $value === $chunks->last();
        });
        return json_encode($chunks->all());
    }
    public function luong(){
        $luongs = NhanVienModel::get();
        return json_encode($luongs->sum->Luong);
    }
    public function tenNV(){
        $tenNVs = NhanVienModel::all( 'MaNV');
        return json_encode($tenNVs->collapse());
    }
}
