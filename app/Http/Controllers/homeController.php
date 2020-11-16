<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\Specie;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Specie::with('animals') -> get();
         $animals = Animal::all();
        return view('welcome',['species'=> $species ,'animals'=> $animals ]);
    }

}
