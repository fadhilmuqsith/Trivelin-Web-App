<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'travel_route', 'price', 'image'];

    public $timestamps = false;

    public function tour()
    {
        return $this->hasMany(Booking::class);
    }
}
