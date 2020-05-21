@extends('layouts.home')

@section('section')

<div class="site-blocks-cover" style="background-image: url('/images/hero_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
        <div class="site-block-cover-content text-center">
          <h1>Search results: {{ $query }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section text-center col-12">
        <h2 class="text-uppercase">Searched Products</h2>
      </div>
    </div>

    <div class="row">
      @if ($products->count() > 0)
        @foreach($products as $product)
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            @if($product->quantity == $product->limit)
              <span class="tag">Out of Stock</span>
            @endif
            <a href="{{ route('singleproduct', ['id' => $product->id]) }}"> <img height="200" src="{{ asset($product->featured) }}" alt="{{ $product->title }}"></a>
            <h3 class="text-dark"><a href="{{ route('singleproduct', ['id' => $product->id]) }}">{{ $product->title }}</a></h3>
            <p class="price">&#8358; @convert($product->price)</p>
          </div>
        @endforeach
      @else
        <h1 class="title-section text-center col-12">
          No results found
        </h1>
      @endif
    </div>
  </div>
</div>

@include('partials.feature')

@endsection


    