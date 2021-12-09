<?php
// Rajouter le type "pipou" à chaque pokemon
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

for ($i = 0; $i < count($pokemons); $i++)
{
    $pokemons[$i]['types'][] = 'pipou';
}

var_dump($pokemons);