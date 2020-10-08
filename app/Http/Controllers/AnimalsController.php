<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\Specie;
class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Specie::all(); 
        $animals = Animal::all(); 
        return view('Animals.index',['animals' => $animals ,'species' => $species ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $species = Specie::all(); 
        $animals = Animal::all(); 
        return view('Animals.create',['animals' => $animals ,'species' => $species ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
      Animal::create(['name'=> $input['name'] , 
                     'image'=> $input['image'] ,
                     'description'=> $input['description'] , 
                     'extinto'=> $input['extinto'] , 
                     'specie_id'=> $input['specie_id'] , 
                     ]);
      return redirect('Animals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $species = Specie::all(); 
        return view ('Animals.edit', ['animal' => $animal ,'species' => $species]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
       $input=$request ->all();
       $animal -> update(['name'=> $input['name'] , 
                         'image'=> $input['image'] ,
                        'description'=> $input['description'] , 
                        'extinto'=> $input['extinto'] , 
                       'specie_id'=> $input['specie_id'] , 
       ]);
       return redirect('Animals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal -> delete();
        return redirect('Animals');


      ;
    }
}
