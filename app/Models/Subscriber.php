<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    public const STATUS_SUBSCRIBED = 'subscribed';
    public const STATUS_UNSUBSCRIBED = 'unsubscribed';
    public const STATUS_BOUNCED = 'bounced';
    public const STATUS_COMPLAINED = 'complained';

    public const STATUS = [
        self::STATUS_SUBSCRIBED,
        self::STATUS_UNSUBSCRIBED,
        self::STATUS_BOUNCED,
        self::STATUS_COMPLAINED
    ];
    public const SOURCE_WEB = 'Web - Artesanos del Código';

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'lastname',
        'status',
        'source'
    ];
}
