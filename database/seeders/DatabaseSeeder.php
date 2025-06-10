<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Izveido 5 valstis
        Country::factory()
            ->count(5)
            ->has(City::factory()->count(4)) // Katrai valstij izveido 4 pilsētas
            ->create();
    }
}
