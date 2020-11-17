<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','user_id'];
    
    public function  animals()
    {
    return $this->hasMany('App\Models\Animal');
   }

   public function user()
    {
        return $this -> belongsTo('App\Models\User');
    }
}
