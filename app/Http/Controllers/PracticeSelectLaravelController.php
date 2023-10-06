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

class PracticeSelectLaravelController extends Controller
{
    public function index(){
        #1.Tìm những nhân viên làm việc ở phòng số 4
        echo "1. Tìm những nhân viên làm việc ở phòng số 4 <br /><br/>";
        $nhanviens = NhanVienModel::where('PHG',4)->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "*".
            "Mã NV: ".
            $nhanvien->MaNV. "<br />";
        }

        echo "---------------<br />";
        $phongbans = PhongBanModel::get();
        foreach($phongbans[1]->NhanViens as $phongban){
            echo
            "Tên NV: ".
            $phongban->HoNV. "``".
            $phongban->TenLot. "``".
            $phongban->TenNV. "*".
            "Mã NV: ".
            $phongban->MaNV. "<br />";
        }
        echo "-------------------------<br />";
        #2.Tìm những nhân viên có mức lương trên 30000
        echo "2. Tìm những nhân viên có mức lương trên 30000 <br /> <br />";
        $nhanviens = NhanVienModel::where('Luong','>',30000)->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "*".
            "Mã NV: ".
            $nhanvien->MaNV. "*".
            "Lương: ".
            $nhanvien->Luong. "<br />";
        }
        echo "-------------------------<br />";
        /*3.Tìm các nhân viên có mức lương trên 25,000 ở phòng 4
        hoặc các nhân viên có mức lương trên 30,000 ở phòng 5*/
        echo "3. Tìm các nhân viên có mức lương trên 25,000 ở phòng 4
        hoặc các nhân viên có mức lương trên 30,000 ở phòng 5 <br /><br />";
        $nhanviens = NhanVienModel::where([
            ['Luong', '>', 25000],
            ['PHG', 4],
        ])
        ->orWhere(function($query){
            $query->where('Luong', '>', 30000)
            ->where('PHG', 5);
            })
        ->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "*".
            "Mã NV: ".
            $nhanvien->MaNV. "*".
            "Lương: ".
            $nhanvien->Luong. "*".
            "PHG: ".
            $nhanvien->PHG. "<br />";

        }
        echo "-------------------------<br />";
        #4. Cho biết họ tên đầy đủ của các nhân viên có họ bắt đầu bằng ký tự ‘N’
        echo "4. Cho biết họ tên đầy đủ của các nhân viên có họ bắt đầu bằng ký tự ‘N’ <br /><br />";
        $nhanviens = NhanVienModel::where('HoNV', 'like', "N%")->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "<br />";

        }
        echo "-------------------------<br />";
        /*8. Cho biết các nhân viên sinh trước ngày 30/4/1965
        hoặc ở TP HCM hoặc làm việc tại phòng số 4*/
        echo "8. Cho biết các nhân viên sinh trước ngày 30/4/1965
        hoặc ở TP HCM hoặc làm việc tại phòng số 4 <br /><br />";
        $nhanviens = NhanVienModel::where('NgSinh', '<', '1965-04-30')
        ->orWhere('DChi', 'like', '%Tp HCM')->orWhere('PHG', 4)->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "*<br />".
            "Mã NV: ".
            $nhanvien->MaNV. "*<br />".
            "NgSinh: ".
            $nhanvien->NgSinh. "*<br />".
            "DChi: ".
            $nhanvien->DChi. "*<br />".
            "PHG: ".
            $nhanvien->PHG. "<br />-------------<br />";
        }
        echo "-------------------------<br />";
        #9. Cho biết các nhân viên sinh trước năm 1975
        echo "9. Cho biết các nhân viên sinh trước năm 1975 <br />";
        $nhanviens = NhanVienModel::where('NgSinh', '<', '1965-04-30')->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "*<br />".
            "Mã NV: ".
            $nhanvien->MaNV. "*<br />".
            "NgSinh: ".
            $nhanvien->NgSinh. "<br />-------<br />";
        }
        echo "-------------------------<br />";
        #11. Với mỗi phòng ban, cho biết tên phòng ban và địa điểm phòng
        echo "11. Với mỗi phòng ban, cho biết tên phòng ban và địa điểm phòng <br />";
        $phongbans = PhongBanModel::join('diadiem_phg', 'phongban.MaPHG', 'diadiem_phg.MaPHG')->get();
        foreach($phongbans as $phongban){
            echo
            "Tên PHG: ". $phongban->TenPHG. "<br />".
            "DiaDiem: ". $phongban->DiaDiem. "<br />--------<br />";

        }
        #12. Tìm tên những người trưởng phòng của từng phòng ban
        echo "12. Tìm tên những người trưởng phòng của từng phòng ban <br />";
        $phongbans = PhongBanModel::join('nhanvien', 'phongban.TrPHG', '=', 'nhanvien.MaNV')->get();
        foreach($phongbans as $phongban){
            echo
            "Tên NV: ".
            $phongban->HoNV. "``".
            $phongban->TenLot. "``".
            $phongban->TenNV. "<br />".
            "Mã NV: ".
            $phongban->MaNV. "<br />".
            "Tên PHG: " .
            $phongban->TenPHG. "<br />-----<br />";
        }
        #13. Tìm tên và địa chỉ của tất cả các nhân viên của phòng "Nghiên cứu".
        echo "13. Tìm tên và địa chỉ của tất cả các nhân viên của phòng Nghiên cứu <br />";
        $nhanviens = NhanVienModel::join('phongban','nhanvien.PHG', '=', 'phongban.MaPHG')
        ->where('PHG', '=', 5)->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "<br />".
            "Mã NV: ".
            $nhanvien->MaNV. "<br />".
            "DChi: ".
            $nhanvien->DChi. "<br />".
            "Tên PHG: ".
            $nhanvien->TenPHG. "<br />-----<br />";
        }
        /*14. Với mọi đề án ở "Ha Noi", liệt kê các mã số đề án (MADA),
        mã số phòng ban chủ trì đề án (PHONG), họ tên trưởng phòng (HONV, TENLOT, TENNV)
        cũng như địa chỉ (DCHI) và ngày sinh (NGSINH) của người ấy.*/
        echo "14. Với mọi đề án ở Ha Noi, liệt kê các mã số đề án (MADA),
        mã số phòng ban chủ trì đề án (PHONG),
        họ tên trưởng phòng (HONV, TENLOT, TENNV)
        cũng như địa chỉ (DCHI) và ngày sinh (NGSINH) của người ấy.<br />";
        $deans = DeAnModel::join('phongban', 'dean.phong', '=', 'phongban.MaPHG')
        ->join('nhanvien', 'phongban.TrPHG', '=', 'nhanvien.MaNV')
        ->where('DDiem_DA', 'Hà Nội')->get();
        foreach($deans as $dean){
            echo
            "Địa điểm DA: ".
            $dean->DDiem_DA. "<br />".
            "Mã số đề án: ".
            $dean->MaDA. "<br />".
            "Mã số phòng: ".
            $dean->Phong. "<br />".
            "Họ tên trưởng phòng: ".
            $dean->HoNV. "``".
            $dean->TenLot. "``".
            $dean->TenNV. "<br />".
            "DChi: ".
            $dean->DChi. "<br />".
            "NgSinh: ".
            $dean->NgSinh. "<br />-------<br />";
        }
        /*16. Với mỗi phòng ban, liệt kê tên phòng ban (TENPHG) v
        à lương trung bình của những nhân viên làm việc cho phòng ban đó.*/
        echo "16. Với mỗi phòng ban, liệt kê tên phòng ban (TENPHG)
        và lương trung bình của những nhân viên làm việc cho phòng ban đó. <br />";
        $phongbans = PhongBanModel::withAvg('NhanViens as LuongTB', 'Luong')->get();
        foreach($phongbans as $phongban){
            echo
            "Tên PHG: ".
            $phongban->TenPHG. "<br />".
            "Trung bình Lương nhân viên: ".
            $phongban->LuongTB. "<br />-----<br />";
        }
        #17.Lương trung bình của tất cả các nữ nhân viên
        echo "17. Lương trung bình của tất cả các nữ nhân viên <br />";
        $nhanviens = NhanVienModel::groupBy('Phai')
        ->select(DB::raw('avg(Luong) as LuongNuTB'), 'Phai')->where('Phai', 'Nữ')->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Phái: ".
            $nhanvien->Phai. "<br />".
            "Luong TB: ". "<br />".
            $nhanvien->LuongNuTB. "<br />-----<br />";
        }
        #18. Với mỗi nhân viên, cho biết số lượng nhân viên mà nhân viên đó quản lý trực tiếp.
        echo "18. Với mỗi nhân viên, cho biết số lượng nhân viên mà nhân viên đó quản lý trực tiếp.<br />";
        $nhanviens = NhanVienModel::select(
            DB::raw('count(nv.MaNV) as SoNhanVienQuanLy'),
            'ql.HoNV',
            'ql.TenLot',
            'ql.TenNV',
            'ql.MaNV')
        ->from('nhanvien as ql')
        ->leftJoin('nhanvien as nv', 'ql.MaNV', '=', 'nv.Ma_NQL')
        ->groupBy('ql.HoNV', 'ql.TenLot', 'ql.TenNV', 'ql.MaNV')
        ->get();
        foreach($nhanviens as $nhanvien){
            echo
            "Tên NV: ".
            $nhanvien->HoNV. "``".
            $nhanvien->TenLot. "``".
            $nhanvien->TenNV. "<br />".
            "Mã NV: ".
            $nhanvien->MaNV. "<br />".
            "Số nhân viên quản lý: ".
            $nhanvien->SoNhanVienQuanLy. "<br />-----<br />";
        }
    }
}
