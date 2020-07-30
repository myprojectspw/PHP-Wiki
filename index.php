<!DOCTYPE html>
<html lang="pl">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
    <meta charset="utf-8" />
    <title>Piekarnia</title>
</head>

<body>
    <h1>Zamówienie online</h1>
    <form action="order.php" method="post">
        <label>Ile pączków (0.99 PLN/szt):</label>
        <input type="text" class="form-control" name="paczki"/>
        <br /><br />

        <label>Ile ciastek (1.99 PLN/szt):</label>
        <input type="text" class="form-control" name="ciastka"/>
        <br /><br />

        <input type="submit" class="btn btn-primary" value="Wyślij zamówienie" />
    </form>
<?php


?>

</body>
</html>