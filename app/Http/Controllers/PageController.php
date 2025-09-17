<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
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
        $teams = TeamMember::all();

        // 2. Kirim data '$teams' ke dalam view
        return view('pages.about', compact('teams'));
    }
      public function blog()
    {
        return view('pages/blog');
    }
      public function service1()
    {
        return view('pages/service1');
    }
    public function service2(){
        return view('pages/service2');
    }
    public function service3(){
        return view('pages/service3');
    }
}
