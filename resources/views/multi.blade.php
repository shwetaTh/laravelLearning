<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication table of {{$num}}</h1>
    @for($i=1;$i<=10;$i++)
        <p>{{$num}} X {{$i}} = {{$num*$i}}</p>
        @endfor
</body>
</html>