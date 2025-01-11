<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phosphorus extends Model
{
    protected $table = "phosphorus";

    public function post(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
