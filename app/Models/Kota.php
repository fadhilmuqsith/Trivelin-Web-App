<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kota',
    ];

    public function tour()
    {
        return $this->hasMany(Tour::class, 'id_kota', 'id');
    }
}
