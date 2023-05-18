<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_name' => $this->faker->unique()->text(25),
            'symbol_code' => $this->faker->unique()->slug(5),
            'activity' => $this->faker->boolean(),
            'creation_date' => new DateTime('now'),
            'parent_category' => $this->faker->unique()->text(25),
        ];
    }
}
