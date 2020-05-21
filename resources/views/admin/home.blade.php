@extends('layouts.app')

@section('content')
<div class="col-md-3">
    <div class="panel panel-info">
        <div class="panel-heading text-center">
            PRODUCTS
        </div>

        <div class="panel-body">
            <h1 class="text-center">{{ $product_count }}</h1>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-info">
        <div class="panel-heading text-center">
            CATEGORIES
        </div>

        <div class="panel-body">
            <h1 class="text-center">{{ $categories_count }}</h1>
        </div>
    </div>
</div>
@endsection
