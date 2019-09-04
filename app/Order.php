<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= ' Order';
    protected $primaryKey = 'order_id';
    protected  $fillable =[
        'order_name',
        'product_id',
        'employees_id',
        'customer_id',
        'tableorder_id',
        'totalMoney',
        'date',
        'status',
        'active'
    ];
}
