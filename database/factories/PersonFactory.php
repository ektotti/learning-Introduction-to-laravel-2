<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;
use Closure;

class PersonFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Person::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'age' => rand(0, 100),
        ];
    }

    public function upper(){
        return $this->state(function(){
            return [
                'email' => strtoupper($this->faker->email),
            ];
        });
    }

    public function configure()
    {
        return $this->afterCreating(function (Person $person){
            $person->email .= 'aftermaking';
            $person->save();
        });
    }
    
}
