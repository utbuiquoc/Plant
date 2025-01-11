<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potassium extends Model
{
    protected $table = "potassium";

    public function post(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
