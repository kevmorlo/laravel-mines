<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les mines</title>
</head>
<body>
    <h1>Toutes les mines de la {{$concession->name}} :</h1>
    @foreach($mine as $mine)
    @if ($mine->concession_id == $concession->id)
    <h2>{{$mine->name}} ; {{$mine->longitude}} ; {{$mine->latitude}}</h2>
    @endif
    @endforeach

    
</body>
</html>