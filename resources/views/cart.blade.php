@extends('layouts.app')

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Shopping Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<div class="container mt-5 mb-5">
    @if($isCartEmpty)
    <div class="alert alert-info text-center">
        <p>Your cart is empty. <a href="{{ route('shop') }}" class="fw-bold">Start shopping now!</a></p>
    </div>
    @else
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Product</th>
                    <th>Description</th> <!-- Added Description Column -->
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item['product_name'] ?? 'Product Not Found' }}</td>
                    <td>{{ $item['product_description'] ?? 'No Description' }}</td> <!-- Display Product Description -->
                    <td>&#8377;{{ number_format($item['price'] ?? 0, 2) }}</td>
                    <td>
                        <form action="{{ route('cart.update', $item['product_id']) }}" method="POST" class="d-flex align-items-center">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;" class="form-control me-2">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </td>
                    <td>&#8377;{{ number_format(($item['price'] ?? 0) * ($item['quantity'] ?? 0), 2) }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $item['product_id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @php
    $totalAmount = 0;
    $message = "I would like to place an order for:\n\n";
    foreach ($cartItems as $item) {
    $totalAmount += ($item['price'] ?? 0) * ($item['quantity'] ?? 0);
    $message .= "- {$item['product_name']} \n Description: {$item['product_description']}\n Price: ₹" . number_format($item['price'], 2) . "\n Quantity: {$item['quantity']}\n Total: ₹" . number_format(($item['price'] * $item['quantity']), 2) . "\n\n"; // Added description to the message
    }
    $message .= "Total Amount: ₹" . number_format($totalAmount, 2);
    $whatsappMessage = urlencode($message);
    @endphp

    <div class="d-flex justify-content-end mt-3">
        <h5>Total Amount: ₹{{ number_format($totalAmount, 2) }}</h5>
    </div>

    <div class="d-flex justify-content-between mt-4 mb-5">
        <a href="{{ route('shop') }}" class="btn btn-primary">Continue Shopping</a>
        <a href="https://wa.me/9558698068?text={{ $whatsappMessage }}" class="btn btn-success" target="_blank">Proceed to Checkout</a>
    </div>
    @endif
</div>
@endsection