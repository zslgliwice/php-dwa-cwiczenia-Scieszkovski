<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $imieW = $_POST["imie"] ?? '';
    $przedmiotW = $_POST["przedmiot"] ?? '';
    $liczbaW = $_POST["liczba"] ?? '';
    $notakiW = $_POST["notatki"] ?? '';

    if(empty($imieW) || empty($przedmiotW) || empty($liczbaW)){

        header("Location: index.php");
        exit();

    }else if($przedmiotW == "Polski" && $notakiW == true){

        $siano = 55 * $liczbaW;

        echo "<ul><li>Imię:$imieW</li><li>Przedmiot:$przedmiotW</li><li>Ilość godzin:$liczbaW</li><li>Cena:$siano</li></ul>";


    }else if($przedmiotW == "Historia" && $notakiW == true){

        $siano = 65 * $liczbaW;

        echo "<ul><li>Imię:$imieW</li><li>Przedmiot:$przedmiotW</li><li>Ilość godzin:$liczbaW</li><li>Cena:$siano</ul>";


    }else if($przedmiotW == "Wiedza o społeczeństwie" && $notakiW == true){

        $siano = 50 * $liczbaW;

        echo "<ul><li>Imię:$imieW</li><li>Przedmiot:$przedmiotW</li><li>Ilość godzin:$liczbaW</li><li>Cena:$siano</ul>";


    }
    else if($przedmiotW == "Polski" && $notakiW == false){

        $siano = 50 * $liczbaW;

        echo "<ul><li>Imię:$imieW</li><li>Przedmiot:$przedmiotW</li><li>Ilość godzin:$liczbaW</li><li>Cena:$siano</ul>";

    }else if($przedmiotW == "Historia" && $notakiW == false){

        $siano = 60 * $liczbaW;

        echo "<ul><li>Imię:$imieW</li><li>Przedmiot:$przedmiotW</li><li>Ilość godzin:$liczbaW</li><li>Cena:$siano</ul>";


    }else if($przedmiotW == "Wiedza o społeczeństwie" && $notakiW == false){

        $siano = 45 * $liczbaW;

        echo "<ul><li>Imię:$imieW</li><li>Przedmiot:$przedmiotW</li><li>Ilość godzin:$liczbaW</li><li>Cena:$siano</ul>";


    }

    
    ?>
</body>
</html>
