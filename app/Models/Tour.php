<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'city', 'description', 'travel_route', 'itinary', 'price', 'price_detail', 'image', 'id_kota'];

    public $timestamps = false;

    public function tour()
    {
        return $this->hasMany(Booking::class);
    }
}
