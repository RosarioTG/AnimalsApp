<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Specie;
class AnimalsController extends Controller
{
    public function __construct()
    {
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Specie::all(); 
        $animals = Animal::with('user','specie')->get();
        return view('animal.index',['animals' => $animals ,'species' => $species ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Animal::class);
        $users = User::all();
        $species = Specie::all(); 
        $animals = Animal::all(); 
        return view('animal.create',['animals' => $animals ,'users' => $users ,'species' => $species ]);
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

        
            $file= $request->file('image')->store('files', [
                'disk' => 'public'
            ]);
            $input['image'] = $file;
      

    $input['user_id'] = $request->user()->id;
      $input = $request->all();
      Animal::create(['name'=> $input['name'] , 
                     'image'=> $input['image'] ,
                     'description'=> $input['description'] , 
                     'extinto'=> $input['extinto'] , 
                     'specie_id'=> $input['specie_id'] , 
                     'user_id'=>$input['user_id'] 
                     ]);
      return redirect('animal');
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
        $this->authorize('update',$animal);
        $species = Specie::all(); 
        return view ('animal.edit', ['animal' => $animal ,'species' => $species]);
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
        $this->authorize('update',$animal);
       $input=$request ->all();
       $animal -> update(['name'=> $input['name'] , 
                         'image'=> $input['image'] ,
                        'description'=> $input['description'] , 
                        'extinto'=> $input['extinto'] , 
                       'specie_id'=> $input['specie_id'] , 
       ]);
       return redirect('animal') ->with('success', 'Animal actualizado!');
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
        return redirect('animal');


      ;
    }
}
