<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country; // Importē Country modeli
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->city(),
            'country_id' => Country::factory(), // Izmanto Country factory, lai izveidotu saistītu valsti
        ];
    }
}
