<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        // Retrieve cart items from session
        $cartItems = Session::get('cart', []);

        if (empty($cartItems)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Process the order (e.g., save to database, send confirmation, etc.)
        // ...

        // Clear the cart from session
        Session::forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
