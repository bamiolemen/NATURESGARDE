@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="panel panel-default">
    <div class="panel-heading">
        Create a category
    </div>

    <div class="panel-body">
        <form action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Category name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Create category</button>
            </div>
        </form>
    </div>
</div>
@endsection
