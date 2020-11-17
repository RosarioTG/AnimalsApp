<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\User;
use App\Models\Specie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpecieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuestCantCreateSpecie()
    {
        $response = $this->get(route('specie.create'));
        $response->assertRedirect('login');
    }
   

    public function testManagerRoleCanCreateSpecie()
    {
        $user = User::factory()->create(['role' => 'manager']);
        $response = $this->actingAs($user)
            ->get(route('specie.create'));
            $response->assertStatus(200);
       
        }
        public function testStoreSpecie()
        {
         $user = User::factory()->create(['role' => 'manager']);
            $response = $this->actingAs($user)->post('specie', 
            ['name' => 'My Specie', 
            'description' => 'This is a description',
            'user_id' => $user->id,
          ]);
            $response = $this->actingAs($user)->get('/specie');
            $specie = Specie::first();
            $this->assertNotEquals($specie->name, 'My Specie');
        }
        public function testAuthorCanEditSpecie()
    {
        $user = User::factory()->create(['role' => 'manager']);
        $specie = Specie::factory()->create( ['user_id' => $user->id ]);
        $response = $this->actingAs($user)->get('specie/'.$specie->id.'/edit/');
        $response->assertStatus(200);
     
        

    }

    public function testEditSpecie()
    {
       
        $user = User::factory()->create(['role' => 'manager']);
        $specie = Specie::factory()->create(['user_id' => $user->id ]);
     $response = $this->actingAs($user)->put('specie/'.$specie->id, 
        ['name' => 'My Specie', 
        ]);
        $specie = Specie::first();
        $this->assertNotEquals($specie->name, 'My Specie');
     
       
    }

    public function testDestroySpecie()
    {
        $user = User::factory()->create(['role' => 'manager']);
        $specie = Specie::factory()->create(['user_id' => $user->id ]);
        $response = $this->actingAs($user)->delete('specie/'.$specie->id);
        $specie = Specie::all();
        $this->assertNotEquals($specie->count(), 0);
    }
    public function testView()
    {
        $specie = Specie::factory()->create();
        $user = User::factory()->create(['role' => 'manager']);
        $response = $this->actingAs($user)->get('specie');
     
        $response->assertSee( $specie->created_at);
    }
}
