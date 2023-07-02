<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'adminproducts';

    protected $fillable = [
        'productname',
        'productprice',
        'productcategory',
        'productdescription',
        'photo'
    ];
}
