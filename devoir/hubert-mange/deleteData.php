<?php
session_start();

    if (isset($_POST['delete']) && $_POST['delete'] === 'true')
    {
        session_destroy();
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
    <h1>Suppression des données</h1>
    <p>Attention la suppression des données est irreversible !</p>
    <form action="" method="POST">
        <input type="hidden" name="delete" value="true">
        <input type="submit" value="Supprimer les données">
    </form>
    <?php require_once 'footer.php' ?>
</body>
</html>
