<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    public $fillable = [
        'row_id',
        'language_id',
        'key',
        'value',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function row()
    {
        return $this->belongsTo(Row::class);
    }
}
