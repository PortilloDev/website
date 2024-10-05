<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title_h1', 'title_h2', 'main_paragraph', 'secondary_paragraph', 'extract', 'main_image', 'secondary_image'];

}
