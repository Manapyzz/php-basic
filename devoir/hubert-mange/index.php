<?php
    session_start();
    require_once 'foods.php';
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

    <h1>Passer une commande</h1>

    <form action="order.php" method="POST">
        <label for="foodOrder">
            Choississez votre plat:
        </label>
        <select name="foodChoosen" id="foodOrder">
            <?php foreach($foodsAvailable as $foodAvailable): ?>
                <option value="<?php echo $foodAvailable['slug'] ?>"><?php echo $foodAvailable['name'] . ' - ' . $foodAvailable['price'] . ' €'?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="quantity">Quantité:</label>
        <input type="number" name="quantity" id="quantity"> <br>
        <input type="submit" value="Passer ma commande">
    </form>

    <?php require_once 'footer.php' ?>
</body>
</html>
