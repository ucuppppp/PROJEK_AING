<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'category_id' => mt_rand(1,6),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(3),
            // excerpt : Cuplikan dari isi Blog singkat
            'excerpt' => $this->faker->sentence(5),
            // body : isi lengkap dari blogs
            // 'body' => '<p>'.implode('</p><p>'$this->faker->paragraphs(mt_rand(5, 10))).'</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                   ->map(fn($p)=> "<p>$p</p>")
                   ->implode(''),
            'published_at' => now(),
        ];
    }
}