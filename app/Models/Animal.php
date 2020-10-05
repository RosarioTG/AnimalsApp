<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
   
    protected $filleable = ['name','description','species_id','image'];
    public function specie()
    {
        return $this -> belongsTo('App\Models\Specie');
    }

}
