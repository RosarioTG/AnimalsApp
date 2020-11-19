<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;


class UploadImageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testManagerCanUploadFile()
    {
        Storage::fake('public');

        $file = UploadedFile::fake()->create('test.jpeg','1200');

        $animal = Animal::factory()->make()->toArray();
        $animal['image'] = $file;

         $user = User::factory()->create(['role' => 'manager']);
        $response = $this->actingAs($user)->post('/animal', $animal);

       $response->assertRedirect('/animal');
        Storage::disk('public')->assertExists('files/' . $file->hashName());
        $animal = Animal::first();
        $this->assertNotEmpty($animal->image);

    }
}
