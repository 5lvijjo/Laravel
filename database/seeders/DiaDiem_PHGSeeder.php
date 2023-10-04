<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaDiem_PHGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diadiem_phg')->insert([
            [
                'MaPHG' => 1,
                'DiaDiem' => 'TP HCM',
            ],
            [
                'MaPHG' => 4,
                'DiaDiem' => 'Hà Nội',
            ],
            [
                'MaPHG' => 5,
                'DiaDiem' => 'TAU',
            ],
            [
                'MaPHG' => 5,
                'DiaDiem' => 'Nha Trang',
            ],
            [
                'MaPHG' => 5,
                'DiaDiem' => 'TP HCM',
            ]

        ]);
    }
}
