<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Cart;

class FrontEndController extends Controller
{
    public function index()
    {
    	return view('index')
               ->with('categories', Category::all())
               ->with('products', Product::take(6)->get())
               ->with('new_products', Product::take(4)->orderBy('created_at', 'desc')->get());
    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('categorypage')
                ->with('categories', Category::all())
                ->with('category', $category)
                ->with('title', $category->name);
    }

    public function product($id)
    {
        $product = Product::find($id);

        return view('singleproduct')
                ->with('categories', Category::all())
                ->with('product', $product);
    }

    public function store()
    {
        return view('store')
                ->with('categories', Category::all())
                ->with('products', Product::with('category')->paginate(6));
    }

    public function about()
    {
        return view('about')
                    ->with('categories', Category::all());
    }

    public function contact()
    {
        return view('contact')
                    ->with('categories', Category::all());
    }
}
