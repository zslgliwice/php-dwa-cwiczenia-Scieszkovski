<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{

            background-color: rgb(63, 62, 62);

        }
        form{

            color: white;

        }

        h1{

            color: orangered;

        }

    </style>
</head>
<body>
    <h1>Tokeny bezpieczeństwa SAFE - logowanie</h1><br>
    <form method = "POST" action = "">login: 
        <input type="text" name = "login" style="background-color: white;"><br>hasło:
        <input type="password" name = "haslo" style="background-color: white;"><br>

        <button type = "submit" style="background-color: white;">Zaloguj</button> <br>

        <?php
        
        $loginW = $_POST["login"]?? '';
        $hasloW = $_POST["haslo"]?? '';

        function token($dlugosctokenu = 10){

            $znaki = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
            $dlugoscznakow = strlen($znaki);
            $losowe = "";
            
            for($i = 0; $i < $dlugosctokenu; $i++){

                $losowe .= $znaki[rand(0, $dlugoscznakow -1)];

            }

            return $losowe;

        }

        $losowe = token();

        $pawel = "Witaj Paweł, weź się do roboty leniu xD <br> Jednorazowy token dostępu do skarbca to: $losowe";
        $gawel = "Witaj Gaweł, szefie wszystkich szefów! <br> Jednorazowy token dostępu do skarbca to: $losowe";
        $zledane = "Niepoprawny login lub hasło!";

        if($loginW == "pawlo" && $hasloW == "napadnabank"){

            echo $pawel;

        }else if($loginW == "gawlo" && $hasloW == "likeaboss"){

            echo $gawel;

        }else if($loginW !== "pawlo" || $hasloW !== "napadnabank" || $loginW !== "gawlo" || $hasloW !== "likeaboss"){

            echo $zledane;

        }
        
        ?>
    </form>
</body>
</html>