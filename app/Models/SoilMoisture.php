<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoilMoisture extends Model
{
    public function post(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
