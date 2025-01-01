@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Edit Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->
<div class="container mt-150 mb-150">
    <h2>Edit Product</h2>
    <form action="{{ route('update.product', $product->product_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH') <!-- Use PATCH here -->
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                <option value="{{ $category->category_id }}" {{ $product->category_id == $category->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="product_description">Description</label>
            <textarea class="form-control" id="product_description" name="product_description" required>{{ $product->product_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
            <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 150px;">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection