

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="d-flex  flex-wrap container alig-content-center">
        @foreach ($valori as $book)
            <div class="card col-4 px-5 py-5 ">
                <h1> {{$book->title}} </h1>
                <h5> {{$book->original_title}} </h1>
                <h5> origine:{{$book->nationality}} </h1>
                <h5>data pubblicazione {{$book->date}} </h1>
                <h5>voto : {{$book->vote}} </h1>
            </div>
            
            
        @endforeach
    </div>

    
    
</body>
</html>