<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nitrogen extends Model
{
    protected $table = 'nitrogen';

    public function post(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
