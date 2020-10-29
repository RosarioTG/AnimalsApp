<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class isManagerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::factory()->create(['role' => 'manager']);
        $userIsManager =$user->isManager();
        $this->assertTrue($userIsManager);


    }
    public function testUserIsNotManager()
    {
        $user = User::factory()->create(['role' => 'user']);
        $userIsManager =$user->isManager();
        $this->assertFalse($userIsManager);
    }
}
