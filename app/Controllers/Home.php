<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function about(): string
    {
        return view('aboutpage');
    }
    public function products(): string
    {
        return view('products');
    }
}
