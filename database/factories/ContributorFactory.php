<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contributor>
 */
class ContributorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numberOfLinks = rand(0, 3);
        $links = [];
        for ($i = 0; $i < $numberOfLinks; $i++) {
            $links[] = ['link' => fake()->url()];
        }

        return [
            'name' => fake()->name('male'),
            'avatar' => fake()->imageUrl(640, 480, 'avatar', true),
            'links' => $links,
        ];
    }
}
