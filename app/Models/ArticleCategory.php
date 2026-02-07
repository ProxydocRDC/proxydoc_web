<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleCategory extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'order'];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'article_category_id');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('id');
    }
}
