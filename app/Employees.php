<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table= 'Employees';
    protected $primaryKey = 'employees_id';
    protected  $fillable =[
        'employees_name',
        'sex',
        'birthday',
        'address',
        'email',
        'phoneNumber',
        'active',
    ];
}
