<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'Categories';
    protected $primarykey = 'id';
    protected $fillable = ['name','description'];
}
