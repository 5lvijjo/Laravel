<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhanCongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phancong')->insert([
            [
                'Ma_NVien' =>'009',
                'MaDA' => 1,
                'STT' => 1,
                'ThoiGian' => 32
            ],
            [
                'Ma_NVien' =>'009',
                'MaDA' => 2,
                'STT' => 2,
                'ThoiGian' => 8
            ],
            [
                'Ma_NVien' =>'004',
                'MaDA' => 3,
                'STT' => 1,
                'ThoiGian' => 40
            ],
            [
                'Ma_NVien' =>'003',
                'MaDA' => 1,
                'STT' => 2,
                'ThoiGian' => 20.0
            ],
            [
                'Ma_NVien' =>'003',
                'MaDA' => 2,
                'STT' => 1,
                'ThoiGian' => 20.0
            ],
            [
                'Ma_NVien' =>'008',
                'MaDA' => 10,
                'STT' => 1,
                'ThoiGian' => 35
            ],
            [
                'Ma_NVien' =>'008',
                'MaDA' => 30,
                'STT' => 2,
                'ThoiGian' => 5
            ],
            [
                'Ma_NVien' =>'001',
                'MaDA' => 30,
                'STT' => 1,
                'ThoiGian' => 20
            ],
            [
                'Ma_NVien' =>'001',
                'MaDA' => 20,
                'STT' => 1,
                'ThoiGian' => 15
            ],
            [
                'Ma_NVien' =>'006',
                'MaDA' => 20,
                'STT' => 1,
                'ThoiGian' => 30
            ],
            [
                'Ma_NVien' =>'005',
                'MaDA' => 3,
                'STT' => 1,
                'ThoiGian' => 10
            ],
            [
                'Ma_NVien' =>'005',
                'MaDA' => 10,
                'STT' => 2,
                'ThoiGian' => 10
            ],
            [
                'Ma_NVien' =>'005',
                'MaDA' => 20,
                'STT' => 1,
                'ThoiGian' => 10
            ],
            [
                'Ma_NVien' =>'007',
                'MaDA' => 30,
                'STT' => 2,
                'ThoiGian' => 30
            ],
            [
                'Ma_NVien' =>'007',
                'MaDA' => 10,
                'STT' => 2,
                'ThoiGian' => 10
            ]
        ]);
    }
}
