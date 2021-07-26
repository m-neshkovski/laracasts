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

    // Query scopes
    public function scopeFilter($query, array $filters)  // Post::newQuery()->filter()
    {

        $query->when($filters['search'] ?? false, function($query, $search) {
            $query->where(fn($query) =>

                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            );
        });

        $query->when($filters['category'] ?? false, fn($query, $category) => 
        
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
            // $query->whereExists(function($query, $category) {
            //     $query->from('categories')
            //         ->whereColumn('categories.id', 'posts.category_id')
            //         ->where('category.slug', $category);
            // });
        );

        $query->when($filters['author'] ?? false, fn($query, $author) => 
        
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }
    //     if($filters['search'] ?? false) {
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //                 ->orWhere('body', 'like', '%' . request('search') . '%');
    //     }
    // }

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

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
