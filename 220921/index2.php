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
        <br><br>
        <input type="text" name="liczba">
        <br><br>
        <input type="submit" name="wyslij" value="Oblicz">
    </form>
    <?php
        if(empty($_POST))
        {
            exit;
        }

        $a = $_POST["liczba"];

        $odpowiedz = ($a<0)? 'Nie ma pierwiastka kwadratowego z liczby ujemnej' : sqrt($a);
        echo $odpowiedz."<br>";
    ?>
</body>
</html>