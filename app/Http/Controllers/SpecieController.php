<?php

namespace App\Http\Controllers;

use App\Models\Specie;
use Illuminate\Http\Request;
use App\Models\User;
class SpecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Specie::all(); 
        return view('specie.index',['species' => $species ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Specie::class);
        $species = Specie::all(); 
        $users = User::all();
        return view('specie.create',['species' => $species,'users' => $users ]);
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
        Specie::create(['name'=> $input['name'] , 
                       'description'=> $input['description'] ,
                       'user_id'=>$input['user_id'] ]);
        return redirect('specie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function show(Specie $specie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function edit(Specie $specie)
    {
        $this->authorize('update',$specie);
        return view ('specie.edit', ['specie' => $specie ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specie $specie)
    {
        $this->authorize('update',$specie);
        $input=$request ->all();
       $specie -> update(['name'=> $input['name'] , 
                         'description'=> $input['description'] , 
                        ]);
       return redirect('specie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specie $specie)
    {
       
        $specie -> delete();
        return redirect('specie');
    }
}
