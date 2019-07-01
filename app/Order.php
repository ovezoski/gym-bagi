<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;


class Order extends Model
{
  protected $fillable = ['firstname', 'lastname', 'address', 'product_id', 'state', 'number'];

  public function product()
  {
    return $this->belongsTo(Product::class);
  }

  public static function withState($state){

    return Order::where('state', $state)->get();

  }

}
