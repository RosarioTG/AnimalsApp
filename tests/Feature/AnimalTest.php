<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnimalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuestCantCreateTask()
    {
        $response = $this->get(route('animal.create'));
        $response->assertRedirect('login');
    }
    public function testUserRoleCantCreateTask()
    {
        $user = User::factory()->create(['role' => 'user']);
        $response = $this->actingAs($user)
                ->get(route('animal.create'));
        $response->assertForbidden();
    }

}
