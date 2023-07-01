<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDescription()
    {
        return view('productdescription');
    }
}
