<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table= 'Customer';
    protected $primaryKey = 'customer_id';
    protected  $fillable =[
        'customer_name',
        'birthday',
        'address',
        'email',
        'phoneNumber',
        'active',
    ];
}
