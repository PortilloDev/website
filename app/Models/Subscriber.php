<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    public const STATUS = ['subscribed', 'unsubscribed', 'bounced', 'complained'];

    use HasFactory;

    protected $filleable = [
        'name',
        'email',
        'lastname',
        'status',
        'source'
    ];
}
