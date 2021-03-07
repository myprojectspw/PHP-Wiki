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

        <label>Ile ciast (10.99 PLN/szt):</label>
        <input type="text" class="form-control" name="ciasta"/>

        <label>Ile babeczek (5.99 PLN/szt):</label>
        <input type="text" class="form-control" name="babeczki"/>

        <label>Ile tortów (21.99 PLN/szt):</label>
        <input type="text" class="form-control" name="torty"/>

        <label>Ile muffinek z nadzieniem (6.99 PLN/szt):</label>
        <input type="text" class="form-control" name="muffiny"/>
        <br /><br />

        <input type="submit" class="btn btn-primary" value="Wyślij zamówienie" />
    </form>
<?php


?>

</body>
</html>