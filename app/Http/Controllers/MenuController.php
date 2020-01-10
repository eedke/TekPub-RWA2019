<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('menu/menu', compact("products"));
    }
}
