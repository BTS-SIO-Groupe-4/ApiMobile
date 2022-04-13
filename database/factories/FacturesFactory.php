<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factures>
 */
class FacturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numerify('####'),
            'IdCli' =>$this->faker->numerify('####'),
            'DateFac'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
