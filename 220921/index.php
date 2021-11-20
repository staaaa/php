<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument</title>
</head>
<body>
    <form action="" method="POST">
        Wybierz zadanie jakie chcesz sprawdzić
        <br>
        <input type="text" name ="wybor">
        <br>
        <input type="submit" name="wyslij" value="Oblicz">
    </form>
    </form>
    <?php
        if(empty($_POST))
        {
            exit;
        }
        switch($_POST['wybor'])
        {
            case 1:
            header ("Location: index2.php");
            exit;
            break;

            case 2:
            header ("Location: index3.php");
            exit;
            break;
            
            case 3:
            header ("Location: index4.php");
            exit;
            break;
        }
    ?>
</body>
</html>