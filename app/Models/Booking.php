<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Isset_;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['tour_date', 'status','booking_code', 'quantity', 'name', 'phone_number', 'email','address'];
    protected $guarded = ['id'];
    public $timestamps = true;

    public function tour(){
        return $this->belongsTo(Tour::class);
    }

    
    public function scopeSearchOrder($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('booking_code','like', '%'.$search.'%')
                    ->orWhere('email','like', '%'.$search.'%');
        } );
    }
}
