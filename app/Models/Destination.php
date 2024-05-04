<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destination';
    protected $fillable = ['name', 'description','rating'];

   

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function hotels()
    {
        return $this->hasMany(Hotels::class);
    }
}
