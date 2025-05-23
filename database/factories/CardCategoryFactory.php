<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CardCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->sentence(),
            "description" => $this->faker->text(100),
            "enable" => $this->faker->boolean(),
        ];
    }
}
