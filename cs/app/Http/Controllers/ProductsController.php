<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $title = "my title";
        $data = [
            'name' => 'iphone',
            'price' => 30
        ];
        return view('products.index', compact('title', 'data'));
    }

    public function about()
    {
        return 'about us';
    }

    public function show($id)
    {
        return $id;
    }
}
