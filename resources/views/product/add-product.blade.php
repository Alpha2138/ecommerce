@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Add Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->
<div class="container mt-150 mb-150">
    <h2>Add New Product</h2>
    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="product_description">Description</label>
            <textarea class="form-control" id="product_description" name="product_description" required></textarea>
        </div>
        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection