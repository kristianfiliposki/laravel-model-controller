<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>film</h1>
        <ul>
            @foreach ($film as $item)
            <li>{{$item}}</li>
            @endforeach
        </ul>
        <a href="{{route("serietv")}}">serie</a>
    </div>
</body>
</html>