<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bought_Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'bill_id',
        'product_id'
    ];
    
    public function bill()
    {
        return $this->belongsTo('App\Bill');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
