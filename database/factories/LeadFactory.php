<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'voornaam' => $this->faker->firstName,
            'achternaam' => $this->faker->lastName,
            'telefoonnummer' => $this->faker->phoneNumber,
            'emailadres' => $this->faker->unique()->safeEmail,
            'omschrijving' => $this->faker->sentence,
            'bijlage' => null,
            'akkoord_algemene_voorwaarden' => $this->faker->boolean(80),
        ];
    }
}
