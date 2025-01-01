<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model
use App\Models\Category; // Import the Category model

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard'); // Return the dashboard view
    }

    public function about()
    {
        return view('about'); // Return the about view
    }

    public function contact()
    {
        return view('contact'); // Return the contact view
    }

    public function shop()
    {
        return view('shop'); // Return the shop view
    }

    public function cart()
    {
        return view('cart'); // Return the cart view
    }

    public function checkout()
    {
        return view('checkout'); // Return the checkout view
    }

    public function singleProduct()
    {
        return view('single-product'); // Return the single product view
    }

    public function addProduct()
    {
        return view('add-product'); // Return the add product view
    }

    public function addCategory()
    {
        return view('add-category'); // Return the add category view
    }
}
