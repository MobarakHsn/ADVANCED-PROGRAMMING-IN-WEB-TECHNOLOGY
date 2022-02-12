<html>
    <head>
    </head>
    <body>
        <a href="{{route('orderview')}}">Order</a>|
        <a href="{{route('cartview')}}">View Cart</a>|
        <a href="{{route('checkoutView')}}">Checkout</a><br>
         @yield('content')
        <div>Copy Right &copy ClassTask2</div>
    </body>
</html>