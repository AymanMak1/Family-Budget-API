<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'   => $this->faker->text($maxNbChars = 12),
            'amount' => $this->faker->numberBetween($min = -999999, $max = 999999),
            'category'  => $this->faker->text($maxNbChars = 20)
        ];
    }
}
