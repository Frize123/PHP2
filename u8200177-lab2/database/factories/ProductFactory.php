<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;
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
        $new_category = Category::factory()->createOne();
        $new_category->save();

        return [
            'product_name' => $this->faker->unique()->text(15),
            'symbol_code' => $this->faker->unique()->slug(5),
            'detailed_content' => $this->faker->unique()->text(35),
            'price' => $this->faker->numberBetween(1,100000),
            'image' => $this->faker->image(),
            'creation_date' => new DateTime('now'),
            'amount' => $this->faker->numberBetween(1,100),
            'category_id' => $new_category->id,
        ];
    }
}
