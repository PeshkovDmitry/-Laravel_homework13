<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\Framework\Constraint\IsTrue;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => $this->faker->sentence(2, true),
            'name' => $this->faker->sentence(6, true),
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
