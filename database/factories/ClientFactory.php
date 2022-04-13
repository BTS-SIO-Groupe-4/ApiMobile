<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=>$this->faker->unique()->numerify('####'),
            'NomCli'=>$this->faker->lastname(),
            'PrenomCli'=>$this->faker->firstname(),
            'NumCli'=>$this->faker->phoneNumber(),
            'MailCli'=>$this->faker->unique()->safeEmail(),
            'VilleCli'=>$this->faker->city(),
            'AdresseCli'=>$this->faker->streetAddress(),
            'Prospect'=>$this->faker->boolean(),



        ];
    }
}
