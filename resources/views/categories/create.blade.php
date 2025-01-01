@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Category</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<div class="container mt-150 mb-150">
    <h2>Add New Category</h2>
    <form action="{{ route('store.category') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="category_name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection