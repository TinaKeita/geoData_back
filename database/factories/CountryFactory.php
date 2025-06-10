<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->country(),
            'area_km2' => $this->faker->randomFloat(2, 1000, 10000000),
            'population' => $this->faker->numberBetween(100000, 1400000000),
        ];
    }
}
