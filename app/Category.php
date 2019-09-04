<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= 'Category';
    protected $primaryKey = 'category_id';
    protected  $fillable =[
        'category_name',
        'content',
        'images',
        'describe',
        'status',
        'active',
    ];
}
