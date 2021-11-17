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
    <form action="sendFruits.php" method="POST">
        <input type="checkbox" id="orange" name="foods[]" value="orange">
        <label for="orange">Orange</label>
        <input type="checkbox" id="apple" name="foods[]" value="apple">
        <label for="apple">Apple</label>
        <input type="checkbox" id="strawberry" name="foods[]" value="strawberry">
        <label for="strawberry">Strawberry</label>
        <input type="checkbox" id="banana" name="foods[]" value="banana">
        <label for="banana">Banana</label>
        <input type="submit" value="Envoyer des fruits">
    </form>
</body>
</html>