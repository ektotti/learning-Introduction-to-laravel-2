<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('jp_JP');

        for($i = 0; $i <= 10; $i++){
            $person = new Person();
            $contents = [
                'name' => $faker->name,
                'mail' => $faker->email,
                'age' => rand(0, 100),
            ];
            $person->fill($contents)->save();
        }
    }
}
