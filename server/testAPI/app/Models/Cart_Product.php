<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart_Product extends Model
{
    public function cart(){
        return $this->belongeToMany('App\Models\Cart');
    }

    public function product()
    {
         return $this->belongsTo('App\Models\Product');
    }

    public function showCart()
   {
       $carts_id = Auth::id();
       return $this->where('carts_id',$carts_id)->get();
   }


   public function addCart($products_id)
   {
       $carts_id = Auth::id();
       $cart_add_info = Cart_Product::firstOrCreate(['products_id' => $products_id, 'carts_id'=> $carts_id]);

       if($cart_add_info->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }else{
           $message = 'カートに登録済みです';
       }

       return $message;
  }
}
