<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('pages/home');
    }

      public function contact()
    {
        return view('pages/contact');
    }

      public function about()
    {
        return view('pages/about');
    }
      public function blog()
    {
        return view('pages/blog');
    }
      public function service1()
    {
        return view('pages/service1');
    }
}
