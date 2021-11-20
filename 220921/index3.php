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
        <input type="text" name="liczba1">
        <br><br>
        <input type="text" name="liczba2">
        <br><br>
        <input type="submit" name="wyslij" value="Oblicz">
    </form>
    <?php
        if(empty($_POST))
        {
            exit;
        }   
        $b = $_POST["liczba1"];
        $c = $_POST["liczba2"];

        if($b>$c)
        {
            echo $b." jest wieksze od ".$c;
        }
        else if($c > $b)
        {
            echo $c." jest wieksze od ".$b;
        }
        else echo $b." jest rowne ".$c;
    ?>
</body>
</html>