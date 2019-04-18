<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $appends = ['name'];

    /**
     * Get posts of category
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the row for the category.
     */
    public function row()
    {
        return $this->morphOne(Row::class, 'rowable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function getTranslationsAttribute()
    {
        return $this->row->translations;
    }

    protected function language()
    {
        $lang = Language::where('code', \Lang::locale())->first();
        return $lang ? $lang : Language::first();
    }
    /**
     * Name form Translation
     **/
    public function getNameAttribute()
    {
        $translations = $this->translations
            ->where('language_id', $this->language()->id)
            ->where('key', 'name')
            ->first();

        if (! $translations) {
            $translations = $this->translations
                ->where('language_id', 1)
                ->where('key', 'name')
                ->first();
        }

        return $translations->value;
    }
}
