@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Category List</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-150 mb-150">
    <h2>Edit Category</h2>
    <form action="{{ route('update.category', $category->category_id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->category_name }}" required>
        </div>
        <div class="form-group">
            <label for="category_description">Description</label>
            <textarea class="form-control" id="category_description" name="category_description">{{ $category->category_description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection