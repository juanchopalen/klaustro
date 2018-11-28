<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'intro', 'image', 'content', 'category_id', 'user_id',     ];

    protected $appends = ['author', 'category_name', 'comments_count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getAuthorAttribute()
    {
        return $this->user->name;
    }


    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }

    public function getCommentsCountAttribute()
    {
        return $this->comments->count();
    }

    /**
     * Method to search by any column
     * @param  Query $query
     * @param  string $target [description]
     * @return Query
     */
    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->
                where('id', $target)
                ->orWhere('title', 'like', "%$target%")
                ->orWhere('intro', 'like', "%$target%")
                ->orWhere('content', 'like', "%$target%");
        }
    }

    public function scopeByDate($query, $month, $year)
    {
        if ($month != '') {
            $from = Carbon::create($year, $month)->startOfMonth();
            $to = Carbon::create($year, $month)->endOfMonth();

            return $query->whereBetween('created_at', [$from, $to]);
        }
    }

    public function scopeByCategory($query, $category_id)
    {
        if ($category_id != '') {
            return $query->where('category_id', $category_id);
        }
    }
}
