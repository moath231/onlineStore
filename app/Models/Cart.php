<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public $table = "cart";

    public function product()
    {
        return $this->BelongsTo(Product::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
