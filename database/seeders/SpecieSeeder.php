<?php

namespace Database\Seeders;

use App\Models\Specie;
use Illuminate\Database\Seeder;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Specie::factory()->create();
    }
}
