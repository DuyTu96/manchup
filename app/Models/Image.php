<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'product_id',
        'image1',
        'image2',
        'image3',
        'image4',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
