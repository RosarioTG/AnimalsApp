<?php

namespace Tests\Browser;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testEditSpecie()
    {
        $user =User::factory() ->create([
            'email'=> 'test@laravel.com',
            'password' => bcrypt('12345678')
        ]);
        $this->browse(function (Browser $browser) use ($user) {
        $browser->visit('/login')
              ->type('email',$user->email)
              ->type('password','12345678')
              ->press('LOGIN')
              ->visit('specie')
              ->click('@create')
                 ->type('name', 'Testing Specie')
                 ->type('description', 'This is created with dusk')
                 ->press('Insertar')
                 ->assertSee('Testing Specie')
                 ->click('@edit')
                 ->type('name', 'Edit Dusk')
                 ->type('description', 'This is edit with dusk')
                 ->press('Insertar')
                ->assertSee('Edit Dusk');
        });
    }
}
