<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puppy>
 */
class PuppyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'breed' => $this->faker->word,
            'age' => $this->faker->numberBetween(1, 10),
            'weight' => $this->faker->numberBetween(1, 10),
            'height' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(80000, 100000),
            // 'biteyness' => $this->faker->numberBetween(1, 5),
        ];
    }
}
