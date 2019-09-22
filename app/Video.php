<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title', 'url', 'post_id',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
