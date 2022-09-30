<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->text,
            'slug' => Str::slug($this->faker->text),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween($min=100,$max=900),
            'old_price' => $this->faker->numberBetween($min=100,$max=900),
            'inStock' => $this->faker->numberBetween($min=1,$max=10),
            'image'=>$this->faker->imageUrl($width=640,$height=480),
            'category_id' => $this->faker->numberBetween($min=1,$max=10),
        ];
    }
}
