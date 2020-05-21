@extends('layouts.home')

@section('section')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
  
      <div class="row">
        @foreach ($products as $product)
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                @if($product->quantity == $product->limit)
                  <span class="tag">Out of Stock</span>
                @endif
                <a href="{{ route('singleproduct', ['id' => $product->id]) }}"> <img height="300" src="{{ asset($product->featured) }}" alt="{{ $product->title }}"></a>
                <h3 class="text-dark"><a href="{{ route('singleproduct', ['id' => $product->id]) }}">{{ $product->title }}</a></h3>
                <p class="price">&#8358; @convert($product->price)</p>
            </div>
        @endforeach
      </div>
      {{ $products->links() }}
    </div>
  </div>

  
  @include('partials.feature')

@endsection


    