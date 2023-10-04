<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coba>
 */
class CobaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,3),
            'title' => $this->faker->sentences(3),
            'slug' => $this->faker->slug(3),
            // 'excerpt' => $this->faker->sentences(5), ini apa?
            'body' => $this->faker->paragraphs(3),
            // 'published_at' => $this->null,
        ];
    }
}