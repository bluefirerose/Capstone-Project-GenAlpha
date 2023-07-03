<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'adminproducts';

    protected $fillable = [
        'title',
        'price',
        'product_code',
        'description'
    ];
}
