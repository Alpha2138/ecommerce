<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product; // Import the Product model

class CartController extends Controller
{
    // List Cart Items
    public function index()
    {
        $cartItems = Session::get('cart', []);
        $isCartEmpty = empty($cartItems);

        return view('cart', compact('cartItems', 'isCartEmpty'));
    }

    // Add to Cart
    // Add to Cart
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:tbl_product,product_id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Session::get('cart', []);
        $productId = $request->product_id;

        // Fetch product details from the database
        $product = Product::find($productId);

        if ($product) {
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $request->quantity;
            } else {
                $cart[$productId] = [
                    'product_id' => $productId,
                    'product_name' => $product->product_name, // Store product name
                    'price' => $product->price,               // Store product price
                    'quantity' => $request->quantity,          // Store quantity
                    'product_description' => $product->product_description, // Store product description
                ];
            }

            Session::put('cart', $cart);
            return redirect()->back()->with('success', 'Item added to cart!');
        }

        return redirect()->back()->with('error', 'Product not found.');
    }
    // Update Cart Quantity
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }

    // Remove from Cart
    public function remove($id)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
}
