@php

    $hello = 'Hello world!';

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Header</h1>
    <a href=" {{ route('home')}} ">Home</a>
    <a href=" {{ route('login')}} ">Login</a>
    <a href=" {{ route('contact')}} ">Contact</a>
    <a href=" {{ route('product')}} ">Product</a>

    @if( true )
        <h2>{{ $hello }}</h2>
    @endif
    
    
</body>
</html>