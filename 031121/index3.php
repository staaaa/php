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
        Podaj a:<input type="number" name="liczba1"><br>
        Podaj b:<input type="number" name="liczba2"><br>
        Podaj xpocz:<input type="number" name="liczba3"><br>
        Podaj xkon:<input type="number" name="liczba4"><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php
        if (empty($_POST)) {
            exit;
        }
        $a = $_POST["liczba1"];
        $b = $_POST["liczba2"];
        $xpocz = $_POST["liczba3"];
        $xkon = $_POST["liczba4"];

        for($xpocz; $xpocz<=$xkon; $xpocz++)
        {
            echo $a*$xpocz+$b;
            echo "<br>";
        }
    ?>
</body>
</html>