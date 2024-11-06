<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    public const STATUS_SUBSCRIBED = 'new';
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

    protected $fillable = [ 'name', 'email', 'lastname', 'product_id', 'promotion_id', 'episode_id' , 'source', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function eposide()
    {
        return $this->belongsTo(Episode::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
