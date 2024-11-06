<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Promotion extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['title', 'description', 'embed_code', 'slug', 'image', 'type'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
