@extends('layouts.app')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			Published products
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>
						Image
					</th>
					<th>
						Title
					</th>
					<th>
						Edit
					</th>
					<th>
						Delete
					</th>
				</thead>
 
				<tbody>
					@if($products->count() > 0)
						@foreach($products as $product)
							<tr>
								<td>
									<img src="{{ asset($product->featured) }}" alt="{{ $product->title }}" width="90px" height="50px">
								</td>

								<td>
									{{ $product->title }}
								</td>

								<td>
									<a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-xs btn-info">Edit</a>
								</td>

								<td>
									<a href="{{ route('product.delete', ['id' => $product->id]) }}" class="btn btn-xs btn-danger">Delete</a>
								</td>
							</tr>
						@endforeach
						
					@else
						<tr>
							<th colspan="5" class="text-center">No published products</th>
						</tr>
					@endif
				</tbody>
			</table>
			<div class="text-center">
				{{ $products->links() }}
			</div>
		</div>
	</div>

@stop