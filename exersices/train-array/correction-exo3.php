<?php
// Afficher la string suivante: "Je te choisis carapuce !"
$pokemons = [
    [
        'name' => 'bulbizarre',
    ],
    [
        'name' => 'carapuce',
    ],
    [
        'name' => 'salamèche',
    ]
];

echo sprintf('Je te choisis %s !', $pokemons[1]['name']);