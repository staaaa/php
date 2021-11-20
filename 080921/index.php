<?php include_once "index3.php"?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Podaj liczbe z ktorej chcesz wyciagnac pierwiastek:
        <br>
        <input type="number" name="zmienna" required>
        <br><br>
        <input type="submit" value="Oblicz!">
    </form>
    <br><br>
    <p>
        <?php
            if(empty($_POST))
            {
                exit;
            }
            $zmienna = $_POST["zmienna"];
            funkcja($zmienna);
        ?>
    </p>
</body>
</html>