<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

    /**
     * Get all of the owning rowable models.
     */
    public function rowable()
    {
        return $this->morphTo();
    }
}
