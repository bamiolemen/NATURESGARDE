<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use App\Category;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {
    	$pdt = Product::find(request()->pdt_id);

    	$cartItem = Cart::add([
    		'id' => $pdt->id,
    		'title' => $pdt->title,
    		'qty' => request()->qty,
    		'price' => $pdt->price
    	]);

        Cart::associate($cartItem->rowId, 'App\Product');

    	return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart')->with('categories', Category::all());
    }

    public function cart_delete($id)
    {
        Cart::remove($id);

        return redirect()->back(); 
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty + 1);

        return redirect()->back();
    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);

        return redirect()->back();
    }
}
