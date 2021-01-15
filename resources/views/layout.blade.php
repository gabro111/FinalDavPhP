<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('product') }}">:)</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('product') }}">View All Products</a></li>
            <li><a href="{{ URL::to('product/create') }}">Create a Prouct</a>

            <li><a href="{{URL::to('productDesc') }}">View Product Desc</a></li>
            <li><a href="{{URL::to('productDesc/create') }}">Add Product Desc (With Ajax)</a></li>
            
        </ul>
    </nav>
    @yield('content')



   

</body>



</html>