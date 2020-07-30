<!DOCTYPE html>
<html lang="pl">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
    <meta charset="utf-8" />
    <title>Podsumowanie zamówienia</title>
</head>

<body>
<?php

    $paczki = $_POST['paczki'];
    $ciastka = $_POST['ciastka'];
    $suma = 0.99 * $paczki + 1.99 * $ciastka;


    echo "<h2>Podusmowanie zamówienia</h2>";
    echo '<table cellpadding="10" cellspacing="0" class="table">';
    echo    "<tr>";
    echo        "<td>Pączek (0.99 PLN/szt)</td>";
    echo        "<td> $paczki </td>";
    echo    '</tr>';
    echo    "<tr>";
    echo        "<td>Ciastko (1.99 PLN/szt)</td>";
    echo        "<td> $ciastka </td>";
    echo    "</tr>";
    echo    "<tr>";
    echo        "<td>Suma:</td>";
    echo        "<td>$suma zł</td>";
    echo    "</tr>";
    echo "</table>";
    echo '<br> <a href="index.php">Powrót do strony głównej</a>';
 

?>

</body>
</html>