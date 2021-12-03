<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test DB</title>
</head>
<body>
<h1>Créer un nouvel article</h1>
<form action="insertArticle.php" method="POST">
    <label for="title">Titre de l'article</label>
    <input type="text" name="title" id="title">

    <label for="description">Description de l'article</label>
    <input type="text" name="description" id="description">

    <label for="url">Url de l'image</label>
    <input type="text" name="url" id="url">

    <input type="submit" value="Créer un article">
</form>
</body>
</html>

