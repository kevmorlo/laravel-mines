<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les concessions</title>
</head>
<body>
    <h1>Toutes les concessions :</h1>
    @foreach($concession as $concession)
    <h2>{{$concession->name}} ; {{$concession->siret}}</h2>
    @endforeach

    
</body>
</html>