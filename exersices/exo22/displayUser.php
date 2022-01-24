<?php

require_once 'User.php';

$user = new User($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['age']);

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
    <h1>Votre utilisateur:</h1>
    <p>Nom: <?php echo $user->lastname; ?> </p>
    <p>Prenom: <?php echo $user->firstname; ?></p>
    <p>Email: <?php echo $user->email; ?></p>
    <p>Age: <?php echo $user->age; ?></p>
    <?php if ($user->isOldEnough()): ?>
    <p>Vous pouvez utiliser ce service.</p>
    <?php endif; ?>
</body>
</html>
