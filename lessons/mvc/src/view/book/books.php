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
    <h1>List of Books</h1>
    <p><?php echo $message ?></p>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                Title: <?php echo $book['title']; ?> <br>
                Description: <?php echo $book['description']; ?> <br>
                Author: <?php echo $book['author']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php if ($tooMuch): ?>
        <p>Beaucoup de livre à vendre !</p>
    <?php endif; ?>
    <form action="/book/create" method="POST">
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="author" placeholder="author">
        <input type="submit">
    </form>
</body>
</html>