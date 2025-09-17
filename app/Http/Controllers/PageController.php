<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('users/pages/home');
    }

      public function contact()
    {
        return view('users/pages/contact');
    }

      public function about()
    {
        return view('users/pages/about');
    }
      public function blog()
    {
        return view('users/pages/blog');
    }
      public function service1()
    {
        return view('users/pages/services/service1');
    }
    public function service2(){
        return view('users/pages/services/service2');
    }
    public function service3(){
        return view('users/pages/services/service3');
    }
}
