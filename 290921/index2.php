<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument</title>
</head>

<body>
    <form action="#" method="POST">
        Prosze wprowadź ocene<br>
        <input type="number" name="ocena" max="6" min="1" value="1"><br><br>
        <input type="submit" value="Sprawdz, czy zdałeś">
    </form>
    <?php
    if (empty($_POST)) {
        exit;
    }
    $ocena = $_POST["ocena"];
    switch ($ocena) {
        case 1:
            echo "Nie zdałeś klasy.";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Zdałeś klasę.";
            break;
        case 6:
            echo "Zdałeś z oceną celującą.";
            break;
    }
    ?>
</body>

</html>