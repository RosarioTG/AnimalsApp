<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','specie_id','extinto','image','user_id'];
    public function specie()
    {
        return $this -> belongsTo('App\Models\Specie');
    }
    public function user()
    {
        return $this -> belongsTo('App\Models\User');
    }
    public function getFileIsImageAttribute()
    {
        if(!$this->image) return '';
        $mimeType = Storage::disk('public')->mimeType($this->image);
        return str_contains($mimeType, 'image/');
    }


}
