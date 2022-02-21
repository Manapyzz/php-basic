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
    <h1>List of users:</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['firstname'] . ' ' . $user['lastname'] . ' ' . $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>