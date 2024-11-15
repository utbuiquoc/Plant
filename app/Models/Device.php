<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected function casts(): array
    {
        return [
            'coordinates' => 'array',
        ];
    }
}
