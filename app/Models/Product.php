<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'product_type_id', 'url', 'image', 'slug', 'price', 'image_url', 'external_url', 'type'];
    protected $casts = [
        'price' => MoneyCast::class,
    ];

    public function setTitleAttribute(string $value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'unit_price');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

}
