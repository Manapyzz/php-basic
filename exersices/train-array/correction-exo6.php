<?php
// Afficher le nom de tous les pokemons ainsi que tout leur type à l'aide de plusieurs boucles
$pokemons = [
    [
        'name' => 'bulbizarre',
        'types' => [
            'plante',
            'poison'
        ],
    ],
    [
        'name' => 'carapuce',
        'types' => [
            'eau'
        ]
    ],
    [
        'name' => 'salamèche',
        'types' => [
            'feu'
        ]
    ]
];

foreach ($pokemons as $pokemon)
{
    echo $pokemon['name'] . ' ';

    foreach ($pokemon['types'] as $type)
    {
        echo $type . ' ';
    }

    echo '<br/>';
}