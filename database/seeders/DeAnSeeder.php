<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dean')->insert([
            [
                'TenDA' => 'San pham X',
                'MaDA' => 1,
                'DDiem_DA' => 'Vũng Tàu',
                'Phong' => 5

            ],
            [
                'TenDA' => 'San pham y',
                'MaDA' => 2,
                'DDiem_DA' => 'Nha Trang',
                'Phong' => 5

            ],
            [
                'TenDA' => 'San pham z',
                'MaDA' => 3,
                'DDiem_DA' => 'TP HCM',
                'Phong' => 5

            ],
            [
                'TenDA' => 'Tin hoc hoa',
                'MaDA' => 10,
                'DDiem_DA' => 'Hà Nội',
                'Phong' => 4

            ],
            [
                'TenDA' => 'Cap quang',
                'MaDA' => 20,
                'DDiem_DA' => 'TP HCM',
                'Phong' => 1

            ],
            [
                'TenDA' => 'Dao tao',
                'MaDA' => 30,
                'DDiem_DA' => 'Hà Nội',
                'Phong' => 4

            ]
        ]);
    }
}
