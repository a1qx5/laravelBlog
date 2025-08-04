<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "slug", "description", "image_path", "user_id"];

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
