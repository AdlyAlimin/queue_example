<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuCoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'symbol',
        'buy',
        'sell',
        'change_rate',
        'change_price',
        'high',
        'low'
    ];
}
