<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une concession</title>
</head>
<body>
    <form action="#" method="GET" class="form_header">
    @csrf
    Nom : <input type="text" name="nom" id=""><br><br>
    Numéro de siret : <input type="number" name="siret" id=""><br><br>
    License : <input type="text" name="licence" id=""><br><br>
    Téléphone :  <input type="number" name="phone" id=""><br><br>
    <input type="submit" value="Valider" required class="valider"><br>
    </form>
</body>
</html>