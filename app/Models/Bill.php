<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'number',
        'customer_id',
        'shop_id',
    ];

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
