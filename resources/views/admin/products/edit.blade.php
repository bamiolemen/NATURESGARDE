@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit product: {{ $product->title }}
		</div>

		<div class="panel-body">
			<form action="{{ route('product.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" value="{{ $product->title }}" class="form-control">
				</div> 

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
                </div>
                
                <div class="form-group">
					<label for="price">Product price</label>
					<input type="text" name="price" value="{{ $product->price }}" class="form-control">
                </div> 
                
                <div class="form-group">
					<label for="quantity">Product quantity</label>
					<input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control">
				</div> 

				<div class="form-group">
					<label for="category">Select a Category</label>
					<select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="summernote" cols="5" rows="5" class="form-control">{{ $product->content }}</textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Update product
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@stop