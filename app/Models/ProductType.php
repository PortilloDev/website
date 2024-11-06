<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    public const PRODUCT_TYPE_EBOOK = 'Ebook';
    public const PRODUCT_TYPE_COURSE = 'Cursos';
    public const PRODUCT_TYPE_UPLOAD = 'Descargable';
    protected $fillable = ['name', 'slug', 'description'];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
}
