<?php

namespace Database\Factories;

use App\Models\Specie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SpecieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Specie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this -> faker->title,
            'description' => $this -> faker-> text
        ];
    }
}
