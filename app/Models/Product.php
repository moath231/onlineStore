<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, 
            fn($query, $search) => 
                $query
                    ->where('shortDescription', 'like', '%' . $search . '%')
                    ->orWhere('longDescription', 'like', '%' . $search . '%'));

        $query->when($filters['category'] ?? false,
            fn($query, $category) => 
                $query->whereHas('category',fn($query) =>
                    $query->where('slug',$category)));
        
        $query->when($filters['brand'] ?? false,
            fn($query, $brand) => 
                $query->whereHas('brand',fn($query) =>
                    $query->where('slug',$brand)));

        $query->when($filters['min'] ?? false,
            fn($query, $min) => 
                $query
                ->where('price', '>', $min ));

        $query->when($filters['max'] ?? false,
            fn($query, $max) => 
                $query
                ->where('price', '<', $max ));
    }

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public function brand()
    {
        return $this->BelongsTo(Brand::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
