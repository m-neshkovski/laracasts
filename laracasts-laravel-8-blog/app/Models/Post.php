<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'category_id',
        'user_id',
    ];

    protected $guarded = [
        'id',
    ];

    protected $with = ['category', 'author'];

    // ako sakame da isklucime mass assignment sekade
    // protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
