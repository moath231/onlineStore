<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public function brand()
    {
        return $this->BelongsTo(Brand::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
