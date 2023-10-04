<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('NhanVien')->insert([
            [
                'HoNV' => 'Đinh',
                "Tenlot" => 'Bá',
                'TenNV' => 'Tiên',
                "MaNV" => '009',
                "NgSinh" => '1960-02-11',
                'DChi' => '119 Cống Quỳnh, Tp HCM',
                'Phai' => 'Nam',
                'Luong' => 30000,
                'PHG' => 5,
            ],
            [
                'HoNV' => 'Nguyễn',
                "Tenlot" => 'Thanh',
                'TenNV' => 'Tùng',
                "MaNV" => '005',
                "NgSinh" => '1962-08-20',
                'DChi' => '222 Nguyễn Văn Cừ, Tp HCM',
                'Phai' => 'Nam',
                'Luong' => 40000,
                'PHG' => 5,
            ],
            [
                'HoNV' => 'Bùi',
                "Tenlot" => 'Ngọc',
                'TenNV' => 'Hằng',
                "MaNV" => '007',
                "NgSinh" => '1954-03-11',
                'DChi' => '332 Nguyễn Thái Học, Tp HCM',
                'Phai' => 'Nam',
                'Luong' => 25000,
                'PHG' => 4,
            ],
            [
                'HoNV' => 'Lê',
                "Tenlot" => 'Quỳnh',
                'TenNV' => 'Như',
                "MaNV" => '001',
                "NgSinh" => '1967-02-01',
                'DChi' => '291 Hồ Văn Huệ, Tp HCM',
                'Phai' => 'Nữ',
                'Luong' => 43000,
                'PHG' => 4,
            ],
            [
                'HoNV' => 'Nguyễn',
                "Tenlot" => 'Mạnh',
                'TenNV' => 'Hùng',
                "MaNV" => '004',
                "NgSinh" => '1967-03-04',
                'DChi' => '95 Bà Rịa, Vũng Tàu',
                'Phai' => 'Nam',
                'Luong' => 38000,
                'PHG' => 5,
            ],
            [
                'HoNV' => 'Trần',
                "Tenlot" => 'Thanh',
                'TenNV' => 'Tâm',
                "MaNV" => '003',
                "NgSinh" => '1957-05-04',
                'DChi' => '119 Cống Quỳnh, Tp HCM',
                'Phai' => 'Nam',
                'Luong' => 25000,
                'PHG' => 5,
            ],
            [
                'HoNV' => 'Trần',
                "Tenlot" => 'Hồng',
                'TenNV' => 'Quang',
                "MaNV" => '008',
                "NgSinh" => '1967-09-01',
                'DChi' => '80 Lê Hồng Phong, Tp HCM',
                'Phai' => 'Nam',
                'Luong' => 25000,
                'PHG' => 4,
            ],
            [
                'HoNV' => 'Phạm',
                "Tenlot" => 'Văn',
                'TenNV' => 'Vinh',
                "MaNV" => '006',
                "NgSinh" => '1965-01-01',
                'DChi' => '45 Trưng Vương, Hà Nội',
                'Phai' => 'Nữ',
                'Luong' => 55000,
                'PHG' => 1,
            ]
            ]);
    }
}
