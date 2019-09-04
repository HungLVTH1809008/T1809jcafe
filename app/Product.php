<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='Product';
    protected $primaryKey ='product_id';
    protected  $fillable =[
        'product_name',
        'category_id',
        'detail',
        'price',
        'status',
        'images',
        'date',
        'priceNew',
        'active',

    ];
}
