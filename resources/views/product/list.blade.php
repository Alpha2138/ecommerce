@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('title', 'Product List')

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Product List</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<div class="container mt-5">
    <h2>Product List</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 100px; height: auto;">
                    </td>
                    <td>{{ $product->product_name }}</td>
                    <td>₹{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->product_description }}</td>
                    <td>
                        <a href="{{ route('edit.product', $product->product_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('delete.product', $product->product_id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection