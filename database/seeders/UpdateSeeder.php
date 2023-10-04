<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phongban')
                ->where('MaPHG', 5) ->update(['TrPHG' => '005']);
        DB::table('phongban')
                ->where('MaPHG', 4) ->update(['TrPHG' => '008']);
        DB::table('phongban')
                ->where('MaPHG', 1) ->update(['TrPHG' => '006']);

        DB::table('nhanvien')
                ->where('MaNV','009') ->update(['Ma_NQL' => '005']);
        DB::table('nhanvien')
                ->where('MaNV','005') ->update(['Ma_NQL' => '006']);
        DB::table('nhanvien')
                ->where('MaNV','007') ->update(['Ma_NQL' => '001']);
        DB::table('nhanvien')
                ->where('MaNV','001') ->update(['Ma_NQL' => '006']);
        DB::table('nhanvien')
                ->where('MaNV','004') ->update(['Ma_NQL' => '005']);
        DB::table('nhanvien')
                ->where('MaNV','003') ->update(['Ma_NQL' => '005']);
        DB::table('nhanvien')
                ->where('MaNV','008') ->update(['Ma_NQL' => '001']);
    }
}
