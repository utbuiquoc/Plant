<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conductivity extends Model
{
    public function post(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
