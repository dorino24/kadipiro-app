<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function category()
    {
        // Relasi model Post ke Category
        // One to One
        // untuk mendapat category_id
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName()
    {
        return 'short';
    }
}
