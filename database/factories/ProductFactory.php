<?php

namespace Database\Factories;

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
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1,5),
            'office_id' => $this->faker->numberBetween(1,4),
            'price' => $this->faker->numberBetween(1,99999),
            'date_p' => $this->faker->dateTimeBetween(),
            'state' => $this->faker->numberBetween(1,0),
            'comments' => $this->faker->sentence(),
        ];
    }
}
