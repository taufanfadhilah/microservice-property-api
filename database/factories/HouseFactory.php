<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'residence_id' => $this->faker->numberBetween(1, 10),
            'owner_id' => $this->faker->numberBetween(1, 10),
            'block' => strtoupper($this->faker->randomletter),
            'number' => $this->faker->numberBetween(10, 15),
        ];
    }
}
