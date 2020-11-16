<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalApiController extends Controller
{
    public function index(Request $request)
    {
    $animals = Animal::with('specie')->where('user_id',$request->user()->id)->get();
    return response()->json([
        'animals'=>$animals
    ]);


    }
}
