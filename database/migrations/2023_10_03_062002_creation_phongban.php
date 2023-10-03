<?php

use App\Http\Controllers\NhanVienController;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreationPhongban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongban', function (Blueprint $table) {
            $table->string('TenPHG');
            $table->integer('MaPHG')->primary();
            $table->string('TrPHG')->nullable();
            $table->date('Ng_NhanChuc');
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
        Schema::dropIfExists('phongban');
    }
}
