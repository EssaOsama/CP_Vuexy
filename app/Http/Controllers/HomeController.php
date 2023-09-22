<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }
    
    public function ecommerce()
    {
        return view('ecommerce');
    }
    public function shop()
    {
        return view('shop');
    }
    public function details()
    {
        return view('details');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    public function checkout()
    {
        return view('checkout');
    }
}