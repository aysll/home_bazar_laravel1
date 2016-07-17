<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable =['CategoryName','Description','Picture','Active'];
    
    public function Products()
    {
      return $this->hasMany('App\Product');
    }
}
