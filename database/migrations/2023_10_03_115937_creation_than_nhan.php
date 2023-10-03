<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreationThanNhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thannhan', function (Blueprint $table) {
            $table->string('Ma_Nvien');
            $table->string('TenTN');
            $table->enum('Phai', ['Nam', 'Nữ']);
            $table->date('NgSinh');
            $table->string('QuanHe');
            $table->primary(['Ma_NVien', 'TenTN']);
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
        Schema::dropIfExists('thannhan');
    }
}
