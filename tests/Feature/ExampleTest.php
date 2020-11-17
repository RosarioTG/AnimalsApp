<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testhome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testCasSeeDashboardAsUser()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get('/animal');
      $response->assertStatus(200);
    }
    public function testGuestIsRedirectToLogin()
    {
        $response = $this->get('/animal');

        $response->assertRedirect('login');
    }

}
