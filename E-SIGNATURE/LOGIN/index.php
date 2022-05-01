
<?php
if (isset($_POST['submit'])) {
    include '/connect.php';
    include '/podpis.php';
    header('Location: ' . $_SERVER['PHP_SELF']);
    }
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podpis</title>
</head>
    <header>Podepisování souboru</header>

<form action="/SIF/E-SIGNATURE/LOGIN/data.php" method="POST">
        <input type="text" name="jmeno">
        <br>
        <input type="text" name="prijmeni" >
        <br>
        <input type="date" name="datum">
        <br>
        <button type="submit" name="submit">Potvrdit</button>
    </form>
</body>
</html>
