<?php

namespace Database\Factories;

use App\Models\LogoBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LogoBrand>
 */
class LogoBrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_brand' => fake()->unique()->company(),
            'logo' => 'toyota.png',
            'jenis' => fake()->randomElement(['kendaraan', 'sparepart_oli']),
        ];
    }
}
