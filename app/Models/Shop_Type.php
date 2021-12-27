<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop_Type extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
