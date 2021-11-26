<?php
session_start();
if (!isset($_POST['foodChoosen']) || !isset($_POST['quantity']))
{
    header('Location: index.php');
    exit;
}

require_once 'foods.php';

// Informations envoyées par le client
$foodChoosen = $_POST['foodChoosen'];
$quantity = $_POST['quantity'];
////

$isFoodHasBeenOrdered = false;

foreach ($foodsAvailable as $foodAvailable)
{
    if ($foodAvailable['slug'] === $foodChoosen)
    {
        $_SESSION['orders'][] = [
            'name' => $foodAvailable['name'],
            'slug' => $foodAvailable['slug'],
            'price' => $foodAvailable['price'],
            'quantity' => intval($quantity)
        ];
        $isFoodHasBeenOrdered = true;
    }
}
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
    <?php if ($isFoodHasBeenOrdered): ?>
        <p>Votre commande a bien été passée !</p>
    <?php else: ?>
        <p>Une erreur s'est produite pendant votre commande...</p>
    <?php endif; ?>

    <a href="index.php">Recommander un plat</a>
</body>
</html>



