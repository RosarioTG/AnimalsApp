<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\User;
use App\Models\Specie;
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
    public function testGuestCantCreateAnimal()
    {
        $response = $this->get(route('animal.create'));
        $response->assertRedirect('login');
    }
    public function testUserRoleCantCreateAnimal()
    {
        $user = User::factory()->create(['role' => 'user']);
        $response = $this->actingAs($user)
                ->get(route('animal.create'));
        $response->assertForbidden();
    }

    public function testManagerRoleCanCreateAnimal()
    {
        $user = User::factory()->create(['role' => 'manager']);
        $response = $this->actingAs($user)
            ->get(route('animal.create'));
        $response->assertStatus(200);
       
        }
        public function testStoreAnimal()
    {
        $specie = Specie::factory()->create();
        $user = User::factory()->create(['role' => 'manager']);
        $response = $this->actingAs($user)->post('animals', 
        ['name' => 'My Animal', 
        'description' => 'This is a description',
        'image'=> 'image',
        'extinto'=> 'no' , 
        'user_id' => $user->id,
        'specie_id' => $specie->id
        ]);
    }
    // public function testAuthorCanEditAnimal()
    // {
    //     $user = User::factory()->create(['role' => 'manager']);
    //     $animal = Animal::factory()->create(['user_id' => $user->id ]);
    //    $response = $this->actingAs($user)
    //     ->get('animal/'.$animal->id.'/edit/');
    //     $response->assertStatus(200);
    //     $response->assertSee($animal->name);
    // }

    // public function testEditAnimal()
    // {
    //     $specie = Specie::factory()->create();
    //     $user = User::factory()->create(['role' => 'manager']);
    //     $animal = Animal::factory()->create(['user_id' => $user->id ]);
    //     $response = $this->actingAs($user)->put('animal/'.$animal->id, 
    //     ['name' => 'My Animal', 
    //     'description' => 'This is a description',
    //     'image'=> 'image',
    //     'extinto'=> 'no' ,
    //     'user_id' => $user->id,
    //     'specie_id' => $specie->id
    //     ]);
    //     $animal = Animal::first();
    //     $this->assertEquals($animal->name, 'My Animal');
    //     $this->assertEquals($animal->description, 'This is a description');
    //     $this->assertEquals($animal->user_id->id, $user->id);
    // }

    // public function testDestroyTask()
    // {
    //     $user = User::factory()->create(['role' => 'manager']);
    //     $animal = Animal::factory()->create(['user_id' => $user->id ]);
    //     $response = $this->actingAs($user)->delete('animal/'.$animal->id);
    //     $animal = Animal::all();
    //     $this->assertEquals($animal->count(), 61);
    // }
}
