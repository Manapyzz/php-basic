<?php
session_start();

if (!isset($_SESSION['user']))
{
    header('Location: index.php');
    exit;
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
    <?php require_once 'header.php' ?>

    <h1>Liste des commandes</h1>

    <?php if (isset($_SESSION['orders'])): ?>
        <ul>
            <?php foreach($_SESSION['orders'] as $key => $order): ?>
                <li>
                    <?php echo sprintf('Commande de %s %s', $order['quantity'], $order['name']); ?>
                    <form action="validateOrder.php" method="POST">
                        <input type="hidden" name="orderId" value="<?php echo $key ?>">
                        <input type="submit" value="Valider commande">
                    </form>
                    <form action="cancelOrder.php" method="POST">
                        <input type="hidden" name="orderId" value="<?php echo $key ?>">
                        <input type="submit" value="Annuler commande">
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune commande pour le moment !</p>
    <?php endif; ?>

    <?php if (isset($_SESSION['turnover'])): ?>
        <p>Chiffre d'affaire: <?php echo $_SESSION['turnover'] ?> €</p>
    <?php else: ?>
        <p>Chiffre d'affaire: 0€</p>
    <?php endif; ?>

    <?php require_once 'footer.php' ?>
</body>
</html>
