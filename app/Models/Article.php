<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title_article', 'date_article', 'content_article', 'image_article', 'users_id', 'category_id', 'opinion_id' ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }
}

