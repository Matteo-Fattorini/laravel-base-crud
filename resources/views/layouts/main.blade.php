<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking List @yield('name')</title>
</head>
<body>
    @section("header")
    <ul class="nav">
  <li class="nav-item ">
    <a class="nav-link active" aria-current="page" href="{{ route("booking.index") }}">Elenco Contatti</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route("booking.create") }}">Crea Contatto</a>
  </li>
 
  
</ul>
     <div class="text-center">
     <h1 class="mt-5">@yield("name")</h1>
     </div>
    @show
    @section('content')


    @show
    
    
</body>
</html>