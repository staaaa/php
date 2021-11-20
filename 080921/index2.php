<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index2.php">
        Podaj liczbe a:
        <br>
        <input type="number" name="a" required>
        <br>
        Podaj liczbe b:
        <br>
        <input type="number" name="b" required>
        <br><br>
        <input type="submit" value="Porównaj!">
    </form>
    <p>
        <?php
            if(empty($_POST))
            {
                exit;
            }
            $a = $_POST['a'];
            $b = $_POST['b'];

            if($a>$b)
            {
                echo $a." > ".$b;
            }
            elseif($b>$a)
            {
                echo $a." < ".$b;
            }
            elseif($a == $b)
            {
                echo $a." = ".$b;
            }
        ?>
    </p>
</body>
</html>