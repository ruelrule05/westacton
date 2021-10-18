<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;
    
    protected $fillable = ['owner', 'marker_id', 'lat', 'long'];
    protected $hidden = ['created_at', 'updated_at'];

    public function getCoordinatesAttribute()
    {
        return $this->lat . ',' . $this->long;
    }
}
