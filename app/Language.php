<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $appends = ['active'];

    public function getActiveAttribute()
    {
        return $this->code == \Lang::locale();
    }
}
