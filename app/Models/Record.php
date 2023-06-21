<?php

namespace App\Models;
use App\Enums\RecordsStatus;
use App\Enums\MonthStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
     protected $fillable = ['email','addsamount', 'amount', 'month', 'status'];

    protected $casts = [
        'month' => MonthStatus::class,
        'status' => RecordsStatus::class
        
       
    ];

    public function records()
    {
        return $this->hasMany(Record::class);
    } 
}
