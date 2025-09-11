{{--
<nav class="bg-white shadow-sm sticky top-0 z-50 ">
    <div class="flex items-center justify-between h-20 mx-auto px-8">
        <div class="flex-shrink-0">
            <a href="#" class="text-2xl font-bold text-gray-800">
                <img class="h-8 w-auto" src="https://digitaliz.net/images/digitaliz.svg" alt="Logo">
            </a>
        </div>
        <div class="flex items-center space-x-8">
            <a href="home.html" class="nav-link text-indigo-600 font-semibold transition">Home</a>
            <a href="about.html" class="nav-link text-gray-700 font-semibold transition hover:text-violet-300">About</a>
            <a href="#" class="nav-link text-gray-700 font-semibold transition hover:text-violet-300">Contact</a>
            <a href="#" class="nav-link text-gray-700 font-semibold transition hover:text-violet-300">Blog</a>
        </div>
            <a href="#" class="btn btn-primary btn-outline">Hubungi Kami</a>
    </div>
</nav> --}}

<div class="navbar bg-white sticky top-0 left-0 right-0 z-50 shadow-sm p-5 px-8 ">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden text-black hover:bg-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a>Home</a></li>
        <li>
          <a>Service</a>
          <ul class="p-2">
            <li><a>Digital Platform Development</a></li>
            <li><a>Creative Content</a></li>
            <li><a>Digital Marketing</a></li>
          </ul>
        </li>
        <li><a>About</a></li>
        <li><a href="">Contact</a></li>
        <li><a>Blog</a></li>
      </ul>
    </div>
    <a>
        <img class="h-8 w-auto" src="https://digitaliz.net/images/digitaliz.svg" alt="">
    </a>
  </div>
  <div class="text-black navbar-center hidden lg:flex text-3xl">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li>
        <details>
          <summary>Service</summary>
          <ul class="bg-white p-2">
            <li><a>Digital Platform Development</a></li>
            <li><a>Creative Content</a></li>
            <li><a>Digital Marketing</a></li>
          </ul>
        </details>
      </li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      <li><a>Blog</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn btn-vio">Hubungi Kami</a>
  </div>
</div>
