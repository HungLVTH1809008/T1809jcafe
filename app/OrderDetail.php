<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table= 'OrderDetail';
    protected $primaryKey = 'orderDetail_id';
    protected  $fillable =[
        'orderDetail_name',
        'order_id',
        'quantity',
        'active',
    ];
}
