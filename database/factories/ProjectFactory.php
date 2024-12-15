<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1, 3),
            'writer_id' => mt_rand(1, 3),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->word(),
            'img' => 'No Image',
            'description' => $this->faker->sentence(mt_rand(1, 4))
        ];
    }
}