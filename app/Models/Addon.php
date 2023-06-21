<?php

namespace App\Models;
use App\Enums\AddonsStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];

    protected $casts = [
        
        'status' => AddonsStatus::class
        
       
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
