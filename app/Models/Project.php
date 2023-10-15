<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $fillable = [
        'title',
        'body',
        'image',
        'repository',
        'slug',
        'user_id',
        'category_id',
    ];

    
    public function user() {
        return $this->belongsTo(User::class);
    }

    // un progetto appartiene ad una sola categoria
    public function category() {
        return $this->belongsTo(Category::class);
    }
}