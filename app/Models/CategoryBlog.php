<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryBlogFactory> */
    use HasFactory;

    protected $table = 'category_blogs';
    protected $fillable = [
        'name', 'description', 'is_active',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_blog_id');
    }

}
