<?php

namespace Tests\Unit;

use App\Models\Animal;
use App\Models\Specie;
use App\Models\User;
use Tests\TestCase;

class AnimalTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUser()
    {
        $author = User::factory()->create();
        $animal= Animal::factory()->create(['user_id' => $author]);
        $this->assertEquals($author  -> id, $animal->user_id);


    }
    public function testSpecie()
    {
        $specie = Specie::factory()->create();
        $animal= Animal::factory()->create(['specie_id' => $specie]);
        $this->assertEquals( $specie  -> id, $animal->specie_id);


    }
    
}
