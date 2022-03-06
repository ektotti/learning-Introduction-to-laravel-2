<?php

namespace Tests\Feature;

use Database\Seeders\PeopleSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        \App\Models\Person::factory()->upper()->count(10)->create();
        $person = \App\Models\Person::find(1);
        $data = $person->toArray();
        print_r($data);
        $this->assertDatabaseHas('people', $data);
    }
}
