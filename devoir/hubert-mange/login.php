<?php
    session_start();

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $invalidCrendials = true;

        if ($_POST['username'] === 'hubert' && $_POST['password'] === 'mange')
        {
            $invalidCrendials = false;
            $_SESSION['user'] = $_POST['username'];
            header('Location: index.php');
            exit;
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
    <?php require_once 'header.php' ?>
    
    <h1>Se connecter</h1>

    <form action="" method="POST">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Se connecter">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $invalidCrendials): ?>
        <p>Vos identifiants sont incorrectes.</p>
    <?php endif; ?>
    
    <?php require_once 'footer.php' ?>
</body>
</html>
