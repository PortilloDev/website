<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'product_type_id', 'url', 'image', 'slug'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

}
