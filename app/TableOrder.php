<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableOrder extends Model
{
    protected $table= 'TableOrder';
    protected $primaryKey = 'tableorder_id';
    protected  $fillable =[
        'seats',
        'status',
        'describe',
        'active'
    ];
}
