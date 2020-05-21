@extends('layouts.home')

@section('section')

<div class="site-blocks-cover" style="background-image: url('/images/hero_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
        <div class="site-block-cover-content text-center">
          <h1>Category: {{ $title }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="title-section text-center col-12">
          <h2 class="text-uppercase">Category Products</h2>
        </div>
      </div>
  
      <div class="row">
        @if ($category->product->count() > 0)
            @foreach($category->product as $product)
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                @if($product->quantity == $product->limit)
                  <span class="tag">Out of Stock</span>
                @endif
                <a href="{{ route('singleproduct', ['id' => $product->id]) }}"> <img height="300" src="{{ asset($product->featured) }}" alt="{{ $product->title }}"></a>
                <h3 class="text-dark"><a href="{{ route('singleproduct', ['id' => $product->id]) }}">{{ $product->title }}</a></h3>
                <p class="price">&#8358; @convert($product->price)</p>
                </div>
            @endforeach
        @else
            <div class="title-section text-center col-12">
                <h3>No Products Available For This Category</h3>
            </div>
        @endif
      </div>
      </div>
    </div>
  </div>



@endsection


    