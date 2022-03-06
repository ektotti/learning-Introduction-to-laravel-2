<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Restdata;

class RestdataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Restdata::class;

    public function definition()
    {
        return [
            'message' => $this->faker->text,
            'adress' => $this->faker->address,
            'url' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
