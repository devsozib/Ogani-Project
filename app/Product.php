<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;
class Product extends Model
{
    protected $fillable = [
        'category_id', 'brand_id','product_name','product_slug','product_code','product_quantity','short_description','long_description','price','image_one','image_two','status',
    ];

  public function Category(){
      return $this->belongsTo(Category::class,'category_id');
  }
  public function brand(){
    return $this->belongsTo(Brand::class,'brand_id');
}

}
