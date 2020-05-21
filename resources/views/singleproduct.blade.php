@extends('layouts.home')

@section('section')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <a
            href="{{ route('store') }}">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $product->title }}</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="{{ asset($product->featured) }}" alt="Image" class="img-fluid p-5">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{ $product->title }}</h2>
          <p>{{ $product->content }}</p>
          

          <p><strong class="text-primary h4">&#8358; @convert($product->price)</strong></p>

          
          
          <form action="{{ route('cart.add') }}" method="post">

            {{ csrf_field() }}
            
              <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 220px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                  <input type="text" class="form-control text-center" name="qty" value="1" placeholder=""
                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>

                  <input type="hidden" name="pdt_id" value="{{ $product->id }}">
                </div>
      
              </div>
              <p><button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</button></p>

      
            </div>

          </form>
      </div>
    </div>
  </div>

  @include('partials.feature')

@endsection