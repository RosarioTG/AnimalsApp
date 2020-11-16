<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class AnimalApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanReadAnimalsCreated()
    {
        $user = User::factory()->create();
        $animal = Animal::factory()->create(['user_id' => $user->id]);
        $response=$this->actingAs($user)->getJson('api/animal');
        
        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonFragment(
        ['user_id'=>$user->id]
        );

    }


    public function testUserCantReadAnimalsCreated()
    {
        $userOne = User::factory()->create();
        $userTwo = User::factory()->create();

        $animal = Animal::factory()->create(['user_id' => $userTwo->id]);
      
        $response = $this->actingAs($userOne)->getJson('/api/animal');

        $response->assertStatus(200);
        $response->assertJsonCount(0);

    }

}
