<?php
// Afficher la string suivante: "Salalèmeche est un pokemon de type feu"
$pokemons = [
    [
        'name' => 'bulbizarre',
        'types' => [
            'plante',
            'poison'
        ]
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

echo sprintf('%s est un pokemon de type %s.', ucfirst($pokemons[2]['name']), $pokemons[2]['types'][0]);