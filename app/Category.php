<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //SQLSTATE[42S02]: Base table or view not found: 1146 Table 'blog.categories' doesn't exist (42S02)
    protected $table = 'categories';
     
}
