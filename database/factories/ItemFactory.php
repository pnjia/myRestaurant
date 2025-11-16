<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomFloat(2, 1000, 100000),
            'description' => fake()->text(),
            'category_id' => fake()->numberBetween(1, 2),
            'img' => fake()->imageUrl(),
            'is_active' => fake()->boolean()
        ];
    }
}
