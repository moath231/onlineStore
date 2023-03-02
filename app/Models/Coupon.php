<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount_percentage',
        'expiration_date',
    ];

    protected $dates = [
        'expiration_date',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
}
