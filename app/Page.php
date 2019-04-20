<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $appends = ['translations'];
    /**
     * Get the row for the category.
     */
    public function row()
    {
        return $this->morphOne(Row::class, 'rowable');
    }

    /**
     * Get Translations
     **/
    public function getTranslationsAttribute()
    {
        return $this->row->translations;
    }

}
