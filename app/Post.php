<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'intro', 'image', 'content', 'category_id', 'user_id',     ];

    protected $appends = ['title', 'intro', 'content', 'author', 'category_name', 'comments_count'];

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

    /**
     * Get the row for the post.
     */
    public function row()
    {
        return $this->morphOne(Row::class, 'rowable');
    }

    protected function language()
    {
        $lang = Language::where('code', \Lang::locale())->first();
        return $lang ? $lang : Language::first();
    }

    /**
     * Get Post translations
     **/
    public function getTranslationsAttribute()
    {
        return $this->row->translations;
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
     * Title form Translation
     **/
    public function getTitleAttribute()
    {
        $translations = $this->translations
            ->where('language_id', $this->language()->id)
            ->where('key', 'title')
            ->first();

        if (! $translations) {
            $translations = $this->translations
                ->where('language_id', 1)
                ->where('key', 'title')
                ->first();
        }

        return $translations->value;
    }
    /**
     * Title form Translation
     **/
    public function getIntroAttribute()
    {
        $translations = $this->translations
            ->where('language_id', $this->language()->id)
            ->where('key', 'intro')
            ->first();

        if (! $translations) {
            $translations = $this->translations
                ->where('language_id', 1)
                ->where('key', 'intro')
                ->first();
        }

        return $translations->value;
    }
    /**
     * Title form Translation
     **/
    public function getContentAttribute()
    {
        $translations = $this->translations
            ->where('language_id', $this->language()->id)
            ->where('key', 'content')
            ->first();

        if (! $translations) {
            $translations = $this->translations
                ->where('language_id', 1)
                ->where('key', 'content')
                ->first();
        }

        return $translations->value;
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
