<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControllerTwo extends Controller
{
    public function index()
    {
        $name = 'iphone';
        $price = '120k';
        $discription = 'good phone';

        return view('products', [
            'name' => $name,
            'price' => $price,
            'des' => $discription
        ]);
    }
}