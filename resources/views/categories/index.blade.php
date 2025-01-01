@extends('layouts.app')

@section('title', 'Category List')

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

<div class="container mt-5">
    <h2>Category List</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->category_description }}</td>
                    <td>
                        <a href="{{ route('edit.category', $category->category_id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('delete.category', $category->category_id) }}" method="POST" class="d-inline-block">
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