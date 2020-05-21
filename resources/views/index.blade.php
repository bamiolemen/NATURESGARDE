@extends('layouts.home')

@section('section')

<div class="site-blocks-cover" style="background-image: url('/images/hero_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
        <div class="site-block-cover-content text-center">
          <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
          <h1>Welcome To NaturesGarde</h1>
          <p>
            <a href="https://api.whatsapp.com/send?phone=08023840501" class="btn btn-primary px-5 py-3">Chat With Us On Whatsapp</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row align-items-stretch section-overlap">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="banner-wrap bg-primary h-100">
          <a href="#" class="h-100">
            <h5>Free <br> Shipping</h5>
            <p>
              We offer free shipping to you
            </p>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="banner-wrap h-100">
          <a href="#" class="h-100">
            <h5>Season <br> Sale 50% Off</h5>
            <p>
              We have a season for discounts
            </p>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="banner-wrap bg-warning h-100">
          <a href="#" class="h-100">
            <h5>Buy <br> A Gift Card</h5>
            <p>
              You can get a gift card from us
            </p>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section text-center col-12">
        <h2 class="text-uppercase">Popular Products</h2>
      </div>
    </div>

    <div class="row">
      @foreach($products as $product)
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
    <div class="row mt-5">
      <div class="col-12 text-center">
        <a href="{{ route('store') }}" class="btn btn-primary px-4 py-3">View All Products</a>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="title-section text-center col-12">
        <h2 class="text-uppercase">New Products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 block-3 products-wrap">
        <div class="nonloop-block-3 owl-carousel">

          @foreach($new_products as $new_product)
            <div class="text-center item mb-4">
              <a href="{{ route('singleproduct', ['id' => $new_product->id]) }}"> <img src="{{ asset($new_product->featured) }}" alt="{{ $new_product->title }}"></a>
              <h3 class="text-dark"><a href="{{ route('singleproduct', ['id' => $product->id]) }}">{{ $new_product->title }}</a></h3>
              <p class="price">&#8358; @convert($product->price)</p>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.feature')

@endsection


    