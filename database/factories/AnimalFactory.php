<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\Specie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnimalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this -> faker->title,
            'description' =>  $this -> faker-> text,
            'extinto' => $this -> faker-> boolean,
            'image'=> $this -> faker-> image(),
            'specie_id' => Specie::factory()->create(),
            'user_id' =>User::factory()->create(),
        ];
    }
}
