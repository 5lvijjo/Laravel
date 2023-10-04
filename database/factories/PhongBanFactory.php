<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class PhongBanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Phongban::class;
    public function definition(Faker $faker)
    {
        return [
            'TenPHG' => $faker->name,
            'MaPHG' => $faker->randomDigit,
            'TrPHG' => $faker->numerify,
            'Ng_NhanChuc' => $faker->date,
        ];
    }
}
