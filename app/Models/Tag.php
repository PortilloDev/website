<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    public function episodes()
    {
        return $this->morphedByMany(Episode::class, 'taggable');
    }

    public function promotions()
    {
        return $this->morphedByMany(Promotion::class, 'taggable');
    }
    public function leads()
    {
        return $this->belongsToMany(Lead::class);
    }
}
