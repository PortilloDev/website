<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use hasFactory;
    protected $fillable = ['name', 'slug', 'description', 'file_path'];

    public function leads()
    {
        return $this->belongsToMany(Lead::class, 'lead_resource');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'resource_user');
    }
}
