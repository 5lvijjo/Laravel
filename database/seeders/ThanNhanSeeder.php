<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThanNhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thannhan')->insert([
            [
                'Ma_Nvien' => '005',
                'TenTN' => 'Trinh',
                'Phai' => 'Nữ',
                'NgSinh' => '1976-04-05',
                'QuanHe' => 'Con gái'
            ],
            [
                'Ma_Nvien' => '005',
                'TenTN' => 'Khang',
                'Phai' => 'Nam',
                'NgSinh' => '1973-10-25',
                'QuanHe' => 'Con trai'
            ],
            [
                'Ma_Nvien' => '005',
                'TenTN' => 'Phương',
                'Phai' => 'Nữ',
                'NgSinh' => '1948-05-03',
                'QuanHe' => 'Vợ chồng'
            ],
            [
                'Ma_Nvien' => '001',
                'TenTN' => 'Minh',
                'Phai' => 'Nam',
                'NgSinh' => '1932-02-29',
                'QuanHe' => 'Vợ chồng'
            ],
            [
                'Ma_Nvien' => '009',
                'TenTN' => 'Tiến',
                'Phai' => 'Nam',
                'NgSinh' => '1978-01-01',
                'QuanHe' => 'Con trai'
            ],
            [
                'Ma_Nvien' => '009',
                'TenTN' => 'Châu',
                'Phai' => 'Nữ',
                'NgSinh' => '1978-12-30',
                'QuanHe' => 'Con gái'
            ],
            [
                'Ma_Nvien' => '009',
                'TenTN' => 'Phương',
                'Phai' => 'Nữ',
                'NgSinh' => '1957-05-05',
                'QuanHe' => 'Vợ chồng'
            ]
        ]);
    }
}
