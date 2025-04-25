<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Product  extends Model
{
    public function order(): BelongsTo
    {
        return $this->belongsTo(order::class);
    }


}
