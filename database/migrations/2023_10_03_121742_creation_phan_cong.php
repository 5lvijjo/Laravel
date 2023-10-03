<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreationPhanCong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phancong', function (Blueprint $table) {
            $table->string('Ma_NVien')->nullable();
            $table->integer('MaDA')->nullable();
            $table->integer('STT')->nullable();
            $table->float('ThoiGian');
            $table->primary(['Ma_NVien', 'MaDA', 'STT']);
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
        Schema::dropIfExists('phancong');
    }
}
