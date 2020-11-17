<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Animal;

class DeleteAnimalTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBorrarAnimal()
    {
        $user =User::factory() ->create([
            'email'=> 'test@laravel.com',
            'password' => bcrypt('12345678'),
            'role' => 'manager'
        ]);
        $animal= Animal::factory() ->create([
            'user_id' => $user->id
        ]);
        $this->browse(function (Browser $browser) use ($user, $animal) {
        $browser->visit('/login')
              ->type('email',$user->email)
              ->type('password','12345678')
              ->press('LOGIN')
              ->visit('animal')
              ->assertSee( $animal->name )
                 ->click('@borrar');
                
                });
            }
}
