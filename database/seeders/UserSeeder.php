<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
        'name' => 'test',
        'email' => 'test@test.com',
        'password' => bcrypt('1234'),
        'role'=>'user'
        ]);

        \App\Models\User::create([
            'name' => 'manager',
            'email' => 'manager@manager.com',
            'password' => bcrypt('1234'),
            'role'=>'manager'
            ]);
    }
}
