<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
  <div class="bg-info text-white p-5 mb-3">
    <a href="" class="btn btn-secondary">Home</a>
    <a href="" class="btn btn-secondary">Add Catagory</a>
    @auth
    <form class="d-inline-block float-right" action="{{route('logout')}}" method="post">
      @csrf
      <button class="btn btn-secondary">{{auth()->user()->name}} | Logout</button>
    </form>
    @else 
      <a href="{{route('login')}}" class="btn btn-secondary">Login</a>
    @endauth
  </div>
  <div class="container">
    @yield('content')
  </div>
  <div class="bg-dark text-white p-4 text-center">
    All rights reserved yourname {{date('Y')}}.
  </div>
</body>
</html>