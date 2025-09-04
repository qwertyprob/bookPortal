<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'cover_image' => $this->faker->imageUrl(200, 300, 'books'),
            'pages' => $this->faker->randomDigit(),
            'published_year' => $this->faker->year(),
        ];
    }
}
