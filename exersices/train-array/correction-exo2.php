<?php

// Afficher la string suivante : "Hello my name is Rick Sanchez"
$identity = [
    'lastname' => 'Sanchez',
    'firstname' => 'Rick'
];

echo sprintf('Hello my name is %s %s.', $identity['firstname'], $identity['lastname']);