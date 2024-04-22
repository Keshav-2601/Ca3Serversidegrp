<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['title', 'description'];
    protected $table = 'destination'; 

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
