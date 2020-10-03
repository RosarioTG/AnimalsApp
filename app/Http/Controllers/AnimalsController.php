<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    function home (){
        $animals = Animal::all();
        return view('welcome',['animals' => $animals]);
    }
}
