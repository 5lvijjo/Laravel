<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreationNhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->string('HoNV');
            $table->string('TenLot');
            $table->string('Ten');
            $table->string('MaNV')->primary();
            $table->date('NgSinh');
            $table->string('DChi');
            $table->enum('Phai', ['Nam', "Nữ"]);
            $table->float('Luong');
            $table->string('Ma_NQL')->nullable();
            $table->integer('Phong')->nullable();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
