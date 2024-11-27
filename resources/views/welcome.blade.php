<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($name == 'Shweta')
        <h1>Hello, {{$name}}</h1>
    @else
        <h1>Who are you</h1>
    @endif
    <p>The date is {{date("Y-m-d")}}</p>
    <p>The current time is {{date("H:i:s")}}</p>
    <a href="/testing">Click me</a>
    <a href="/home">Home</a>
    <a href="/login">login</a>
    <a href="/hi">Hi Hi</a>
    <a href="/add">Add Dish</a> <br>
    <a href="/user/2/shweta">you (passing data through url)</a> <br>
    <a href="/multi/1">Multiplication</a>
</body>
</html>