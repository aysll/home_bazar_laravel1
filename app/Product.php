<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable =['ProductName','ProductDescription','UnitPrice','AvailableSize','AvailableColor','Size','Color','Discount','UnitWeight','WeightType','UnitInStock','UnitInOrder','Picture'];
  public function Category()
  {
    return $this->belongsTo('App\Category');
  }
}
