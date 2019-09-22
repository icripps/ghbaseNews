<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'description', 'url', 'featured', 'post_id',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
