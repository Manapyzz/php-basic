<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire</h1>
    <?php if (isset($_SESSION['myfruit'])): ?>
        <p>J'ai choisi le fruit: <?php echo $_SESSION['myfruit'] ?></p>
    <?php endif; ?>
    <form action="sendFruits.php" method="POST">
        <input type="text" name="fruit">
        <input type="submit" value="Envoyer un fruit">
    </form>
</body>
</html>
