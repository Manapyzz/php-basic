<?php

// Récupérer le pokemon que l'on veut chercher
$choosenPokemon = $_GET['pokemonName'];

// Récupérer le contenu de pokedex.json
$pokedex = file_get_contents('pokedex.json');

// Rendre le contenu utilisable pour notre php
$pokedex = json_decode($pokedex, true);

// Chercher si un pokemon match notre recherche
$pokemon = searchPokemon($pokedex, $choosenPokemon);

if (!empty($pokemon))
{
    $pokemon = addPokemonImage($pokemon);
}

function addPokemonImage(array $pokemonData): array
{
    $pokemonData['image'] = sprintf('https://raw.githubusercontent.com/fanzeyi/pokemon.json/master/images/%03d.png', $pokemonData['id']);
    return $pokemonData;
}

function searchPokemon(array $pokedex, string $pokemonToFound): ?array
{
    $pokemon = null;

    foreach ($pokedex as $pokemonFromPokedex)
    {
        if (strtolower($pokemonFromPokedex['name']['french']) === strtolower($pokemonToFound))
        {
            $pokemon = $pokemonFromPokedex;
            break;
        }
    }

    return $pokemon;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
</head>
<body>
    <h1>Mon super pokedex</h1>
    <?php if (!empty($pokemon)): ?>
        <p>Name: <?php echo $pokemon['name']['french']; ?></p>
        <img src="<?php echo $pokemon['image'] ?>" alt="">
        <p>Type:</p>
        <ul>
            <?php foreach ($pokemon['type'] as $type): ?>
                <li><?php echo $type ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Le pokemon n'existe pas !</p>
    <?php endif ?>
</body>
</html>