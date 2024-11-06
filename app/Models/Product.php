<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'slug', 'price', 'image', 'external_url', 'themes', 'summary', 'is_free'];
    protected $casts = [
        'price' => MoneyCast::class,
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function orders()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

}
