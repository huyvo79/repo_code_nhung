<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';


    public $incrementing = true;

    protected $fillable = [
        'oder_id',
        'product_id',
        'quantity',
        'notes',
    ];


}
