<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'author', 'body','image', 'slug', 
        'category_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }
    
    public function categories(){
       return $this->hasMany(Category::class);
    }

    public function tag()
    {
        // 1 post may have tags
        // any tag may be applied to many posts
        return $this->hasMany(Tag::class,'blog_tag', 'id_blog', 'id_tag');
    }    
}
