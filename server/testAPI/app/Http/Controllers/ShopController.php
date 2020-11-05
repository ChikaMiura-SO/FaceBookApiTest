<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(6);
        return view('shop',compact('products'));
    }

    public function myCart(Cart_Product $cart_product)
    {
        $my_cart = $cart_product->showCart();
        return view('mycart',compact('my_carts'));
    }

    public function addMycart(Request $request,Cart_Product $cart_product)
    {
        $products_id = $request->input('products_id');
        // dd($products_id);
        $message = $cart_product->addCart($products_id);
 
        $my_carts = $cart_product->showCart();
        return view('mycart',compact('my_carts' , 'message'));
 
    }



}
