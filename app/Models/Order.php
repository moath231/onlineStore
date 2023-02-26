<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coupon()
    {
        return $this->hasOne(Coupon::class);
    }

    public function OrderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
    
    public function payment()
    {
        return $this->hasOne(payments::class);
    }
}
