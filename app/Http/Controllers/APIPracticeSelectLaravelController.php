<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhongBanModel;
use App\Models\DiaDiem_PHGModel;
use App\Models\NhanVienModel;
use App\Models\ThanNhanModel;
use App\Models\DeAnModel;
use App\Models\CongViecModel;
use App\Models\PhanCongModel;
use Illuminate\Support\Facades\DB;


class APIPracticeSelectLaravelController extends Controller
{
     #1.Tìm những nhân viên làm việc ở phòng số 4
     public function bT1(){
        return json_encode(NhanVienModel::where('PHG',4)->get());
     }

     #2.Tìm những nhân viên có mức lương trên 30000
     public function bT2(){
        return json_encode(NhanVienModel::where('Luong','>',30000)->get());
     }

     /*3.Tìm các nhân viên có mức lương trên 25,000 ở phòng 4
     hoặc các nhân viên có mức lương trên 30,000 ở phòng 5*/
     public function bT3(){
        $bT3 = NhanVienModel::where([
            ['Luong', '>', 25000],
            ['PHG', 4],
            ])
            ->orWhere(function($query){
                $query->where('Luong', '>', 30000)
                ->where('PHG', 5);
                })
            ->get();
        return json_encode($bT3);
     }

     #4. Cho biết họ tên đầy đủ của các nhân viên có họ bắt đầu bằng ký tự ‘N’
     public function bT4(){
        $bT4 = NhanVienModel::where('HoNV', 'like', "N%")->get();
        return json_encode($bT4);
     }

     /*8. Cho biết các nhân viên sinh trước ngày 30/4/1965
     hoặc ở TP HCM hoặc làm việc tại phòng số 4*/
     public function bT8(){
        $bT8 = NhanVienModel::where('NgSinh', '<', '1965-04-30')
            ->orWhere('DChi', 'like', '%Tp HCM')->orWhere('PHG', 4)->get();
        return json_encode($bT8);
     }

     #9. Cho biết các nhân viên sinh trước năm 1975
     public function bT9(){
        $bT9 = NhanVienModel::where('NgSinh', '<', '1965-04-30')->get();
        return json_encode($bT9);
     }

     #11. Với mỗi phòng ban, cho biết tên phòng ban và địa điểm phòng
     public function bT11(){
        $bT11 = PhongBanModel::join('diadiem_phg', 'phongban.MaPHG', 'diadiem_phg.MaPHG')->get();
        return json_encode($bT11);
     }

     #12. Tìm tên những người trưởng phòng của từng phòng ban
     public function bT12(){
        $bT12 = PhongBanModel::join('nhanvien', 'phongban.TrPHG', '=', 'nhanvien.MaNV')->get();
        return json_encode($bT12);
     }

     #13. Tìm tên và địa chỉ của tất cả các nhân viên của phòng "Nghiên cứu".
     public function bT13(){
        $bT13 = NhanVienModel::join('phongban','nhanvien.PHG', '=', 'phongban.MaPHG')
            ->where('PHG', '=', 5)->get();
        return json_encode($bT13);
     }

     /*14. Với mọi đề án ở "Ha Noi", liệt kê các mã số đề án (MADA),
     mã số phòng ban chủ trì đề án (PHONG), họ tên trưởng phòng (HONV, TENLOT, TENNV)
     cũng như địa chỉ (DCHI) và ngày sinh (NGSINH) của người ấy.*/
     public function bT14(){
        $bT14  = DeAnModel::join('phongban', 'dean.phong', '=', 'phongban.MaPHG')
            ->join('nhanvien', 'phongban.TrPHG', '=', 'nhanvien.MaNV')
            ->where('DDiem_DA', 'Hà Nội')->get();
        return json_encode($bT14);
     }

     /*16. Với mỗi phòng ban, liệt kê tên phòng ban (TENPHG) v
     à lương trung bình của những nhân viên làm việc cho phòng ban đó.*/
     public function bT16(){
        $bT16  = PhongBanModel::withAvg('NhanViens as LuongTB', 'Luong')->get();
        return json_encode($bT16);
     }

     #17.Lương trung bình của tất cả các nữ nhân viên
     public function bT17(){
        $bT17  = NhanVienModel::groupBy('Phai')
            ->select(DB::raw('avg(Luong) as LuongNuTB'), 'Phai')->where('Phai', 'Nữ')->get();
        return json_encode($bT17);
     }

     #18. Với mỗi nhân viên, cho biết số lượng nhân viên mà nhân viên đó quản lý trực tiếp.
     public function bT18(){
        $bT18  = NhanVienModel::select(
            DB::raw('count(nv.MaNV) as SoNhanVienQuanLy'),
            'ql.HoNV',
            'ql.TenLot',
            'ql.TenNV',
            'ql.MaNV'
            )
            ->from('nhanvien as ql')
            ->leftJoin('nhanvien as nv', 'ql.MaNV', '=', 'nv.Ma_NQL')
            ->groupBy('ql.HoNV', 'ql.TenLot', 'ql.TenNV', 'ql.MaNV')
            ->get();
        return json_encode($bT18);
     }
}
