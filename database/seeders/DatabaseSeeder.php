<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PhongBanSeeder::class);
        $this->call(DiaDiem_PHGSeeder::class);
        $this->call(NhanVienSeeder::class);
        $this->call(ThanNhanSeeder::class);
        $this->call(DeAnSeeder::class);
        $this->call(CongViecSeeder::class);
        $this->call(PhanCongSeeder::class);
        $this->call(UpdateSeeder::class);
    }
}
