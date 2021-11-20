<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Podaj liczbę:
        <br>
        <input type="number" name="liczba">
        <input type="submit" value="Wyślij">
    </form>
    <?php
        if (empty($_POST)) {
            exit;
        }
        $SIEMA = $_POST["liczba"];
        for($i = 0; $i < $SIEMA;)
        {
            echo $SIEMA;
            $SIEMA--;
        }
    ?>
</body>
</html>