<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
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
            'product_name' => $this->faker->text,  
            "qty"=>$this->faker->numberBetween($min=1,$max=10),          
            'price' => $this->faker->numberBetween($min=100,$max=900),
            'total' => $this->faker->numberBetween($min=1000,$max=9000),
            'user_id' => $this->faker->numberBetween($min=1,$max=10),
        ];
    }
}
