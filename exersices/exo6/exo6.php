<?php

// Changez vos variables ici pour voir si vos conditions fonctionnent
$firstname = 'Rick';
$lastname = 'Sanchez';
$age = 70;

if ($age >= 18)
{
    echo 'You\'re an adult';
} else {
    echo 'You\'re a minor';
}

echo '<br>'; // On fait un espace entre les deux strings pour que ce soit plus lisible

if ($lastname === 'Sanchez' && $firstname === 'Rick')
{
    echo 'Bienvenue chez moi';
} else {
    echo 'On se connait pas je crois…';
}
