<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <form action="korepetycje.php" method = "POST">

    Podaj swoje imię: <input type="text" name = "imie" required> <br>
    Przedmiot: <input list="przedmiot" name = "przedmiot" id = "browsers"> <br>
    <datalist id ="przedmiot">
        <option value="Polski">
        <option value="Historia">
        <option value="Wiedza o społeczeństwie">
    </datalist>
    Liczba lekcji: <input type="number" name = "liczba" min = "0" required> <br>
    Notatki z lekcji (+5zł/h)<input type="checkbox" name = "notatki"> <br>

    <button onclick="drugaStrona"><a href = "korepetycje.php">Zamów</a></button> <br>

    </form>

</body>
</html>
