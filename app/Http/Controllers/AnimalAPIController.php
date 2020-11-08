<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalAPIController extends Controller
{
    public function index(Request $request){
        $animals = Animal::where('user_id', $request->user()->id)->get();
        return response()->json([$animals]);

    }
}
