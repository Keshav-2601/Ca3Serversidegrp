<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['destination_id', 'destination_img1', 'destination_img2'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
