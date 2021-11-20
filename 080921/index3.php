<?php
    function funkcja($zmienna)
    {
        if($zmienna >= 0)
        {
            echo sqrt($zmienna);
        }
        elseif($zmienna < 0)
        {
            echo "Błąd! Nie można wyciągnąć pierwiastka kwadratowego z liczby ujemnej.";
        }
    }
?>