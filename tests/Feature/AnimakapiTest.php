<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class AnimakapiTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_read_assigned_animal()
    {
        $user = User::factory()->create();
        $animal = Animal::factory()->create(
            [
                "user_id" => $user->id
            ]
        );
        Sanctum::actingAs(
            $user,
            ['view-animal']
        );

        $response = $this->getJson('/api/animal');

        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonFragment([
            "user_id" => $user->id
        ]);
    }
    public function test_user_cant_read_unassigned_animal()
    {
        $Animaluser = User::factory()->create();
        $animal = Animal::factory()->create(
            [
                "user_id" => $Animaluser->id
            ]
        );

        $apiUser = User::factory()->create();
        Sanctum::actingAs(
            $apiUser,
            ['view-animal']
        );

        $response = $this->getJson('/api/animal');
        $response->assertStatus(200);
        $response->assertJsonCount(1);
    }
}
