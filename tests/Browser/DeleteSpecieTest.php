<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Specie;

class DeleteSpecieTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBorrarSpecie()
    {
        $user =User::factory() ->create([
            'email'=> 'test@laravel.com',
            'password' => bcrypt('12345678'),
            'role' => 'manager'
        ]);
        $specie= Specie::factory() ->create([
            'user_id' => $user->id
        ]);
        $this->browse(function (Browser $browser) use ($user, $specie) {
        $browser->visit('/login')
              ->type('email',$user->email)
              ->type('password','12345678')
              ->press('LOGIN')
              ->visit('specie')
              ->assertSee( $specie->name )
                 ->click('@borrar');
                
                });
            }
}
