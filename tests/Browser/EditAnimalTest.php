<?php

namespace Tests\Browser;
use App\Models\User;
use App\Models\Animal;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTestAnimal extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testEditAnimal()
    {
        $user =User::factory() ->create([
            'email'=> 'test@laravel.com',
            'password' => bcrypt('12345678'),
            'role' => 'manager'
        ]);
        $animal= Animal::factory() ->create([
            'user_id ' => $user -> id
        ]);
        $specie =Specie::factory() ->create();
        $this->browse(function (Browser $browser) use ($user , $specie,$animal) {
        $browser->visit('/login')
              ->type('email',$user->email)
              ->type('password',$user->password)
              ->press('LOGIN')
              ->visit('animal')
                 ->assertSee($animal->name )
                 ->click('@edit')
                 ->type('name', 'Edit Dusk')
                 ->type('description', 'This is edit with dusk')
                 ->press('Insertar')
                ->assertSee('Edit Dusk');
        });
    }
}
