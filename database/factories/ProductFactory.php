<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = fake()->sentence(5);
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'price' => fake()->numberBetween(int1: 100_000, int2: 100_000_000),
            'thumbnail' => fake()->imageUrl(640, 480, 'product', true),
        ];
    }
}
