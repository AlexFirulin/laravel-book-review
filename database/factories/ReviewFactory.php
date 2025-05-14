<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'review' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(1, 5),
            'book_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }


    public function good()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(4, 5),
            ];
        });
    }

    public function average()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(2, 4),
            ];
        });
    }

    public function bad()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => $this->faker->numberBetween(1, 3),
            ];
        });
    }
}
