<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "slug", "description", "image_path", "user_id", "is_promoted"];

    protected $casts = [
        'is_promoted' => 'boolean',
    ];

    use Sluggable;

    public function user() {
        return $this->belongsTo(User::class);        
    }

    public function sluggable(): array {
        return [
            'slug'=> [
                'source'=> 'title'
            ]
        ];
    }
}
