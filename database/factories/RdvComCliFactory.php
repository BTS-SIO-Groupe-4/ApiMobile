<?php

namespace Database\Factories;

use App\Models\RdvComCli;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RdvComCli>
 */
class RdvComCliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employe_id' => $this->faker->unique()->numerify('####'),
            'client_id' => $this->faker->unique()->numerify('####'),
            'DateRdv' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
