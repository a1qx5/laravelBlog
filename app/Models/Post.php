<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'image_path',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);        
    }
}
