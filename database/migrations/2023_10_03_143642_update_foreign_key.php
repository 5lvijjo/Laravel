<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phongban', function (Blueprint $table) {
            $table->foreign('TrPHG')->references('MaNV')->on('nhanvien');
        });
        Schema::table('ddiem_phg', function (Blueprint $table) {
            $table->foreign('MaPHG')->references('MaPHG')->on('phongban');
        });
        Schema::table('dean', function (Blueprint $table) {
            $table->foreign('Phong')->references('MaPHG')->on('phongban');
        });
        Schema::table('congviec', function (Blueprint $table) {
            $table->foreign('MaDA')->references('MaDA')->on('dean');
        });
        Schema::table('phancong', function (Blueprint $table) {
            $table->foreign(['MaDA','STT'])->references(['MaDA', 'STT'])->on('congviec');
            // $table->foreign('STT')->references('STT')->on('congviec');
            $table->foreign('Ma_NVien')->references('MaNV')->on('nhanvien');
        });
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->foreign('Ma_NQL')->references('MaNV')->on('nhanvien');
            $table->foreign('Phong')->references('MaPHG')->on('phongban');
        });
        Schema::table('thannhan', function (Blueprint $table) {
            $table->foreign('Ma_NVien')->references('MaNV')->on('nhanvien');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
