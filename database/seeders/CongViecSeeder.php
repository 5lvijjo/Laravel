<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CongViecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('congviec')->insert([
            [
                'MaDA' => 1,
                'STT' => 1,
                'Ten_Cong_Viec' => 'Thiet ke san pham X'
            ],
            [
                'MaDA' => 1,
                'STT' => 2,
                'Ten_Cong_Viec' => 'Thu nghiem san pham X'
            ],
            [
                'MaDA' => 2,
                'STT' => 1,
                'Ten_Cong_Viec' => 'San xuat san pham Y'
            ],
            [
                'MaDA' => 2,
                'STT' => 2,
                'Ten_Cong_Viec' => 'Quang cao san pham Y'
            ],
            [
                'MaDA' => 3,
                'STT' => 1,
                'Ten_Cong_Viec' => 'Khuyen mai san pham Z'
            ],
            [
                'MaDA' => 10,
                'STT' => 1,
                'Ten_Cong_Viec' => 'Tin hoc hoa nhan su tien luong'
            ],
            [
                'MaDA' => 10,
                'STT' => 2,
                'Ten_Cong_Viec' => 'Tin hoc hoa phong Kinh Doanh'
            ],
            [
                'MaDA' => 20,
                'STT' => 1,
                'Ten_Cong_Viec' => 'Lap dat cap quang'
            ],
            [
                'MaDA' => 30,
                'STT' => 1,
                'Ten_Cong_Viec' => 'Dao tao nhan vien Marketing'
            ],
            [
                'MaDA' => 30,
                'STT' => 2,
                'Ten_Cong_Viec' => 'Dao tao chuyen vien vien thiet ke'
            ]
            ]);
    }
}
