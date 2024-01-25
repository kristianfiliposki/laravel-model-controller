<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>serietv</h1>
    <ul>

        @foreach ($movie as $item)
        <li>
            <div>
                <div class="container">
                    
                    <div>
                        {{$item->id}}
                    </div>
                    
                    <div>
                        {{$item->nome}}
                    </div>
                    
                    <div>
                        {{$item->nome}}
                    </div>

                </div>
            </div>
        </li>
    
    
        @endforeach
    </ul>
    <a href="/">pagina iniziales</a>
</body>
</html>
<style>
    .container{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        al
    }
</style>