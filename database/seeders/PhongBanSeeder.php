<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('PhongBan')->insert([
            [
                "TenPHG" => 'Nghiên Cứu',
                "MaPHG" => 5,
                "Ng_NhanChuc" => '1978-05-22',
            ],
            [
                "TenPHG" => 'Điều hành',
                "MaPHG" => 4,
                "Ng_NhanChuc" => '1985-01-01',
            ],
            [
                "TenPHG" => 'Quản lý',
                "MaPHG" => 1,
                "Ng_NhanChuc" => '1971-06-19',
            ]
        ]);
    }
}
