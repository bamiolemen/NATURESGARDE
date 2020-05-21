<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Cart;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')
                    ->with('products', Product::with('category')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if($categories->count() == 0)
        {
            Session::flash('info', 'You must have some categories before attempting to create a post.');

            return redirect()->back();
        }

        return view('admin.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'featured' => 'required|image',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/products', $featured_new_name);

        Product::create([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'content' => $request->content,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'featured' => 'uploads/products/' . $featured_new_name,
            'user_id' => Auth::id()
        ]);

        Session::flash('success', 'Product created succesfully.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.edit')->with('product', $product)
                                       ->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required'
        ]);

        $product = Product::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();

            $featured->move('uploads/products', $featured_new_name);

            $product->featured = $featured_new_name;
        }

        $product->title = $request->title;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->content = $request->content;

        $product->category_id = $request->category_id;

        $product->save();

        Session::flash('success', 'Product updated succesfully.');

        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        Session::flash('success', 'The product was just trashed.');

        return redirect()->back();
    }
}
