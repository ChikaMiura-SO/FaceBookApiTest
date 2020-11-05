<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

// class Cart extends Model
// {
//     protected $fillable = [
//         'products_id', 'user_id',
//     ];

//     public function showCart()
//    {
//        $user_id = Auth::id();
//        return $this->where('user_id',$user_id)->get();
//    }

//    public function product()
//    {
//         return $this->belongsTo('App\Models\Product');
//    }

//    public function addCart($products_id)
//    {
//        $user_id = Auth::id();
       
//        $cart_add_info = Cart::firstOrCreate(['products_id' => $products_id, 'user_id'=> $user_id]);

//        if($cart_add_info->wasRecentlyCreated){
//            $message = 'カートに追加しました';
//        }else{
//            $message = 'カートに登録済みです';
//        }

//        return $message;
//    }

//    public function select(){
//     // INNAR JOIN
//     $my_cart = \DB::table('carts')
//     ->join('products','carts.products_id','=','products.id')
//     ->get();
//    }
// }
